<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    $name = request("name");
    return view('welcome-mine',[
        "name" => "$name",
        "halla" =>"Holla holla, you don't know nohun!"
    ]);
});

Route::get("/post/{posts_title}", [PostsController::class, 'show']);