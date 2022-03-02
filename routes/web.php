<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/home', function () {
    return view('home' , [
        "page_name" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Dhanny Adhi Pramana",
        "email" => "p.dhannypramana@gmail.com",
        "image" => "pp.png",
        "page_name" => "About"
    ]);
});

Route::get('/posts', [PostController::class, 'posts']);
Route::get('/posts/{post:slug}', [PostController::class, 'single_post']);