<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    if( session()->has("user") ){
        // echo "Username is declared";
        return view('chat');
    } else {
        // echo "Username is not declared";
        return view('functions.setName');
    }
});

Route::post("logout", function () {
    session()->flush();
    return redirect(url("")."/");
});

Route::post("/", [App\Http\Controllers\settingsController::class, "setSession"]);

Route::get("history", function () {
    if( session()->has("user") ){
        // echo "Username is declared";
        return view('functions.history');
    } else {
        // echo "Please <a href='" . url(".")."'>log in</a> first!";
        echo "Please log in first!";
    }
    
});

// Route::get('send', function () {
//     return view('functions.send');
// });

Route::get("send", [App\Http\Controllers\sendController::class, "showForm"]);

Route::post("send", [App\Http\Controllers\sendController::class, "processForm"]);
