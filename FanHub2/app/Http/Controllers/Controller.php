<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function isLoggedIn(){
        if (session()->exists("session")){
            $user = User::where('session', session('session'))->first();
            if ($user) {
                return true;
            }
        }
        return false;
    }

    public function getUser(){
        if ($this->isLoggedIn()){
            return User::where('session', session('session'))->first();
        }
    }
}
