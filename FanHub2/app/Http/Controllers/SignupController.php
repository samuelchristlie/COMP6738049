<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class SignupController extends Controller
{
    //
    public function index(){
        if ($this->isLoggedIn()){
            return redirect("");
        }
        return view('signup');
    }

    public function signup(Request $request){
        // dd($request->all());

        if ($this->isLoggedIn()){
            return redirect("");
        }
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:64',
            'user' => 'required|regex:/^[a-zA-Z0-9_\.]+$/|unique:users,username|max:64',
            'email' => 'required|email|unique:users,email|max:64',
            'pass' => 'required|min:6|max:64',
            'confirmPass' => 'required|same:pass',
            'address' => 'required|string|max:128',
        ]);

        $validator->setAttributeNames([
            'name' => 'display name',
            'user' => 'username',
            'pass' => 'password',
            'confirmPass' => 'confirm password',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->input("name");
        $user = strtolower($request->input("user"));
        $email = strtolower($request->input("email"));
        $pass = Hash::make($request->input("pass"));
        $address = $request->input("address");
        
        if ($request->has("artist") && $request->input("artist") === "true"){
            $role = "Artist";
        } else {
            $role = "User";
        }
        $newSession = hash("SHA256", $user.now());


        $newUser = User::create([
            'name' => $name,
            'email' => $email,
            'username' => $user,
            'password' => $pass,
            'role' => $role,
            'address' => $address,
            'session' => $newSession,
        ]);

        session(["session" => $newSession]);
                
        return redirect("");

    }
}
