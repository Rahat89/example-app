<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
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

Route::get('/login', function (){
    session()->put('EP_LOGIN', \Illuminate\Support\Str::random(10));
    dump('You are logged in now');
});

Route::get('/logout', function (){
    session()->forget('EP_LOGIN');
    dump('You are logged out');
});

Route::get('/read-book/{id}', [BookController::class, 'readBook']);
Route::get('/read-post/{id}', [PostController::class, 'readPost']);



Route::get('/posts', [PostController::class, 'all']);
