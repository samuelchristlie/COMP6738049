<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('signUp');
});

Route::get('/modal', function () {
    return view('modal');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/transaction-page', function () {
    return view('transactionPage');
});
Route::get('/profile', function (){
    return view('profile');
});
