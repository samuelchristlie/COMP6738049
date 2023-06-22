<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class HomeController extends Controller
{
    //
    public function index(){
        $artists = User::where("role", "Artist")->where("verify", true)->get();

        if ($this->isLoggedIn()){
            $user = $this->getUser();
            return view("home", ["user" => $user, "artists" => $artists]);
        }
        return view("home", ["artists" => $artists]);
    }
}
