<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'page_name' => 'posts',
            'posts' => Post::all()
        ]);
    }

    public function single_post(Post $post)
    {
        return view('single_post', [
            'page_name' => 'posts',
            'post' => $post
        ]);
    }
}
