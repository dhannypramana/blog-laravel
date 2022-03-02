<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function posts()
    {
        return view('posts', [
            "page_name" => "Posts",
            "blog_posts" => Post::all()
        ]);
    }

    public function single_post(Post $post)
    {
        return view('single_post', [
            "page_name" => "Posts",
            "blog_posts" => $post
        ]);
    }
}