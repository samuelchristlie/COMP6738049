<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class profileController extends Controller
{
    //
    public function loginIndex(){
        return view('login');
    }
    public function registerIndex(){
        return view('signUp');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password'=> 'required|min:8'
        ]);

        if(!Auth::attempt($credentials, $request->remember)){
            return redirect()->back()->withErrors('Invalid Credentials');
        }
        return redirect()->route('home');
    }

    public function register(Request $request){
        $request->validate([
            'first_name' =>'required|string|max:25',
            'last_name' => 'required|numeric|digits:10',
            'username' => 'required|string|max:10',
            'email' => 'required|email|ends_with:@binus.ac.id',
            'password' => 'required|confirmed|min:8',
            'checkbox' =>'required|in:1',
        ]);

        $newUser = new User();
        $newUser->first_name =$request->input('first_name');
        $newUser->last_name = $request->input('last_name');
        $newUser->username = $request->input('username');
        $newUser->email = $request->input('email');
        $newUser->password = Hash::make($request->input('password'));

        $newUser->save();
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function showProfile(Request $request){
        $user = User::latest()->first();
        return view('profile', compact('user'));
    }
    public function onActiveUser(){
        return view('/profile', [
            'user' => $user,
        ]);
    }
}
