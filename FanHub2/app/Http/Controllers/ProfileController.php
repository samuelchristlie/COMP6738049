<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ProfileController extends Controller
{
    //
    public function index($username){
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
}
