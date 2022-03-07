<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show()
    {
        return view('about', [
            'page_name' => 'about',
            'user' => User::first()
        ]);
    }

    public function userPost(User $user)
    {
        return view('user', [
            'page_name' => 'user',
            'posts' => $user->posts
        ]);
    }
}
