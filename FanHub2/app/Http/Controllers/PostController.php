<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Models\Post;
use App\Models\Like;
use App\Models\Notification;

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

        if($request->has("exclusive")){
            if($request->input("exclusive") === "exclusive"){
                $post->exclusive = true;
                $post->save();
            }
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

        

        $posts = $posts->sortByDesc('postDate');

        return view("feed", ["user"=>$user, "posts"=>$posts]);
    }

    public function notifications(){
        if (!$this->isLoggedIn()){
            return redirect("login");
        }

        $user = $this->getUser();

        $followings = $user->followings;

        $notifications = [];

        foreach($followings as $following){
            $artist = $following->artist;
            foreach($artist->posts as $post){
                $notifications[] = new Notification([
                    "thumbnail" => $artist->profilePicture,
                    "content" => $artist->name." created a new post.",
                    "url" => url("/@".$artist->username),
                    "time" => $post->postDate
                ]);
            }

            foreach($artist->products as $product){
                $notifications[] = new Notification([
                    "thumbnail" => $artist->profilePicture,
                    "content" => $artist->name." listed a new product.",
                    "url" => url("/shop/@".$artist->username),
                    "time" => $product->created_at
                ]);
            }


            $notifications = collect($notifications)->sortByDesc('time');

            
            
        }

        $user->lastNotif = now();
        $user->save();

        return view("notifications", ["user"=>$user, "notifications"=>$notifications]);
    }
}
