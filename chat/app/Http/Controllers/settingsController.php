<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class settingsController extends Controller {
    public function setSession(Request $request){
        if ($request->has(["user", "theme"])) {
            // echo "Username: " . $request->user . "<br>";
            // echo "Pass: " . $request->pass . "<br>";
            // echo "Theme: " . $request->theme . "<br>";
            // echo "IP: " . $request->ip() . "<br>";
            // echo "Hash: " . hash("sha256", $request->user.$request->ip()) . "<br>";
            // echo "Trip: " . hash("crc32", $request->pass);
            


            $user = $request->user;
            if(empty($user)){
                $user = "Anonymous";
            }


            $pass = $request->pass;
            $theme = $request->theme;
            $ip = $request->ip();
            $hash = hash("sha256", $user.$ip);
            // $trip = hash("crc32", $pass);


            session(["user" => $user, "pass" => $pass, "theme" => $theme, "hash" => $hash]);
            return view('chat');
        } else {
            return view("functions.setName");
        }
        
    }
}