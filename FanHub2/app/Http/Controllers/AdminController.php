<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Models\User;

class AdminController extends Controller
{
    //




    public function index(){
        if (!$this->isLoggedIn()){
            return redirect("login");
        } else if ($this->getUser()->role !== "Admin"){
            return redirect("");
        }

        $unverifiedArtist = User::where("role", "Artist")->where("verify", false)->get();

        return view("admin", ["user" => $this->getUser(), "artists" => $unverifiedArtist]);
    }

    public function approveArtist(Request $request){
        if (!$this->isLoggedIn()){
            // return redirect("login");
            return response()->json([
                'status' => 'failed'
            ]);
        } else if ($this->getUser()->role !== "Admin"){
            return redirect("");
        }

        $validator = Validator::make($request->all(), [
            'artist' => 'required|integer|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'failed'
            ]);
        }

        $artist = User::where("id", $request->input("artist"))->first();

        $artist->verify = true;
        $artist->save();

        return response()->json([
            'status' => 'success'
        ]);


    }
}
