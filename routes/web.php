<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// home routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// login routes
Route::get('/login', [LoginController::class, 'index']);
Route::get('/submit', [LoginController::class, 'LogIn']);
Route::get('/signout', [LoginController::class, 'SignOut']);

// user routes
Route::resource('/user', UserController::class);
Route::get('/userdelete/{id}', [UserController::class,'destroy']);
Route::get('/userdelete1/{id}', [UserController::class,'destroy1']);

// register routes
Route::resource('/register', RegisterController::class);
