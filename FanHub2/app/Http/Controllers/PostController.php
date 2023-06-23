<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Models\Post;
use App\Models\Like;

class PostController extends Controller
{
    //
    public function createPost(Request $request){
        if (!$this->isLoggedIn()){
            return redirect("login");
        }

        $validator = Validator::make($request->all(), [
            'content' => 'required|string|max:280',
            'image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = $this->getUser();

        $content = $request->input("content");

        if ($request->has("image")){
            $file = $request->file('image');
            $hash = md5_file($file);
            $extension = $file-> getClientOriginalExtension();
            $image = Storage::url($file->storePubliclyAs("public", "images/".$hash.".".$extension));

            $post = Post::create([
                'userId' => $user->id,
                'content' => $content,
                'picture' => $image,
            ]);
        } else {
            $post = Post::create([
                'userId' => $user->id,
                'content' => $content,
            ]);
        }
        

        
        
        return back();
    }

    public function likePost(Request $request){
        if (!$this->isLoggedIn()){
            // return redirect("login");
            return response()->json([
                'status' => 'failed'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'post' => 'required|integer|exists:posts,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'failed'
            ]);
        }

        $postId = $request->input("post");

        $user = $this->getUser();

        $like = Like::where("userId", $user->id)->where("postId", $postId)->first();

        if($like){
            $like->delete();
        } else {
            $like = Like::create([
                'userId' => $user->id,
                'postId' => $postId,
            ]);
        }

        return response()->json([
            'status' => 'success'
        ]);

    }

    public function feed(){

        if (!$this->isLoggedIn()){
            return redirect("login");
        }

        $user = $this->getUser();

        $followings = $user->followings;

        $posts = collect($user->posts);
        foreach ($followings as $following) {
            $posts = $posts->merge($following->artist->posts);
        }

        

        $posts = $posts->sortByDesc('postedOn');

        return view("feed", ["user"=>$user, "posts"=>$posts]);
    }
}
