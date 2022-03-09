<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;

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

Route::get('/blog/home', function () {
    return view('home', [
        'page_name' => 'home',
    ]);
});

// Blog
Route::get('/blog/about', [UserController::class, 'show']);
Route::get('/blog/posts', [PostController::class, 'index']);
Route::get('/blog/posts/{post:slug}', [PostController::class, 'single_post']);
Route::get('/blog/categories', [CategoryController::class, 'index']);
Route::get('/blog/categories/{category:slug}', [CategoryController::class, 'single_category']);
Route::get('/blog/authors/{user:slug}', [UserController::class, 'userPost']);

// Books
Route::get('/book/home', [BookController::class, 'index']);

Route::get('user', function () {
    return hello;
});