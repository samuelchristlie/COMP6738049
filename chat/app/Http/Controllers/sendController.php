<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sendController extends Controller {

    public function showForm(){
        if(session()->has("user") ){
            // echo "Username is declared";
            return view('functions.send');
        } else {
            // echo "Please <a href='" . url(".")."'>log in</a> first!";
            echo "Please log in first!";
        }
    }
        

    public function processForm(Request $request){
        $msg = $request->msg;
        if(session()->has("user") and !empty($msg)){
            // echo "Username is declared";
            $user = session("user");
            $pass = session("pass");

            $ip = $request->ip();
            // $hash = hash("sha256", $user.$ip);
            $hash = session("hash");

            $trip = "";
            if(!empty($pass)){
                $trip = hash("crc32", $pass);
            }
            DB::insert('insert into msgs (user, trip, msg, hash) values (?, ?, ?, ?)', array($user, $trip, $msg, $hash));



        }
        // echo 'Message: ' . $request->msg . '<br>'; 
        return view('functions.send');
    }
}