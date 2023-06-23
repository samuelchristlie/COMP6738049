<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\Follow;
use App\Models\Product;

class ProfileController extends Controller
{
    //
    public function indexProfile($username){
        $cleaned = preg_replace("/[^a-zA-Z0-9_.]/", "", $username);

        if ($username !== $cleaned){
            return redirect("@".$cleaned);
        }

        $findUser = User::where('username', $username)->first();

        if ($this->isLoggedIn()){
            if ($findUser){
                return view("profile", ["user" => $this->getUser(), "profile" => $findUser]);    
            } else {
                return view("profile", ["user" => $this->getUser()]);
            }
            
        } else {
            if ($findUser){
                return view("profile", ["profile" => $findUser]);
            } else {
                return view("profile");
            }
            
        }
        
    }

    public function indexEdit(){
        if (!$this->isLoggedIn()){
            return redirect("login");
        }

        $user = $this->getUser();

        return view("editProfile", ["user" => $user]);
    }

    public function editProfile(Request $request){
        if (!$this->isLoggedIn()){
            return redirect("login");
        }

        $user = $this->getUser();

        if ($request->has("user")){
            if($request->input("user") === $user->username){
                $request->request->remove("user");
            }
        }

        if ($request->has("email")){
            if($request->input("email") === $user->email){
                $request->request->remove("email");
            }
        }


        $validator = Validator::make($request->all(), [
            'cover' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
            'profile' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|min:3|max:64',
            'user' => 'regex:/^[a-zA-Z0-9_\.]+$/|unique:users,username|max:64',
            'email' => 'email|unique:users,email|max:64',
            'address' => 'required|string|max:128',
        ]);

        $validator->setAttributeNames([
            'name' => 'display name',
            'user' => 'username',
            'cover' => 'cover picture',
            'profile' => 'profile picture',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        
        $name = $request->input("name");
        $address = $request->input("address");

        if($request->has("user")){
            $username = strtolower($request->input("user"));
        }

        if($request->has("email")){
            $email = strtolower($request->input("email"));
        }
        

        if ($request->has("cover")){
            $file = $request->file('cover');
            $hash = md5_file($file);
            $extension = $file-> getClientOriginalExtension();
            $cover = Storage::url($file->storePubliclyAs("public", "images/".$hash.".".$extension));
        }

        if ($request->has("profile")){
            $file = $request->file('profile');
            $hash = md5_file($file);
            $extension = $file-> getClientOriginalExtension();
            $profile = Storage::url($file->storePubliclyAs("public", "images/".$hash.".".$extension));
        }

        if(isset($username)){
            $user->username = $username;
        }

        if (isset($email)){
            $user->email = $email;
        }
        $user->name = $name;
        $user->address = $address;

        if(isset($cover)){
            $user->coverPicture = $cover;
        }

        if (isset($profile)){
            $user->profilePicture = $profile;
        }

        $user->save();

        return redirect("/@".$user->username);

    }

    public function follow(Request $request){
        if (!$this->isLoggedIn()){
            return redirect("login");
        }

        $validator = Validator::make($request->all(), [
            'artist' => 'required|integer|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'failed'
            ]);
        }

        $artistId = $request->input("artist");

        $user = $this->getUser();

        $follow = Follow::where("userId", $user->id)->where("artistId", $artistId)->first();

        if($follow){
            $follow->delete();
        } else {
            $follow = Follow::create([
                'userId' => $user->id,
                'artistId' => $artistId,
            ]);
        }

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function shop($username){
        if (!$this->isLoggedIn()){
            return redirect("login");
        }

        $artist = User::where("username", $username)->first();
        if(!$artist){
            return redirect("/@".$username);
        } else if (!$artist->isArtist()){
            return redirect("/@".$username);
        }

        $user = $this->getUser();
        $products = $artist->products;

        return view("profileShop", ["user"=>$user, "products"=>$products, "profile"=>$artist]);
    }
}
