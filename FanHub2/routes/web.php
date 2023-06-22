<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index']);

// Route::get('signup', function () {
//     return view('signup');
// });
Route::get('signup', [SignupController::class, 'index']);
Route::post('signup', [SignupController::class, 'signup']);

// Route::get('login', function () {
//     return view('login');
// });
Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);

Route::get('@{username}', [ProfileController::class, 'indexProfile']);
Route::get('edit-profile', [ProfileController::class, 'indexEdit']);
Route::post('edit-profile', [ProfileController::class, 'editProfile']);

Route::post('new-post', [PostController::class, 'createPost']);
Route::post('like-post', [PostController::class, 'likePost']);