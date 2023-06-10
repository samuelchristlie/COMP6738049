<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class profileController extends Controller
{
    //
    public function onActiveUser(){
        return view('/profile', [
            'user' => $user,
        ]);
    }
}
