<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class LoginController extends Controller
{
    //
    public function index(){
        if ($this->isLoggedIn()){
            return redirect("");
        }
        return view('login');
    }

    public function login(Request $request){
        if ($this->isLoggedIn()){
            return redirect("");
        }

        $validator = Validator::make($request->all(), [
            'user' => 'required|string',
            'pass' => 'required',
        ]);

        $validator->setAttributeNames([
            'user' => 'email or username',
            'pass' => 'password',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = strtolower($request->input("user"));
        $pass = $request->input("pass");

        $findUser = User::where("email", $user)->orWhere("username", $user)->first();

        if (!$findUser ) {
            return back()->withErrors(['user' => 'Email/username not found'])->withInput();
        } elseif (!Hash::check($pass, $findUser->password)){
            return back()->withErrors(['pass' => 'Invalid email/username or password combination'])->withInput();
        }

        $newSession = hash("SHA256", $findUser->username.now());
        $findUser->session = $newSession;
        $findUser->save();

        session(["session" => $newSession]);
                
        return redirect("");

    }

    public function logout(){
        session()->flush();
        return redirect("");
    }
}
