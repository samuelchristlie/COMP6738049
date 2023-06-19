<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        if ($this->isLoggedIn()){
            return view("home", ["user" => $this->getUser()]);
        }
        return view("home");
    }
}
