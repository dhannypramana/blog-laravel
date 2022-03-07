<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'page_name' => 'categories',
            'categories' => Category::all()
        ]);
    }

    public function single_category(Category $category)
    {
        return view('category', [
            'page_name' => 'category',
            'posts' => $category->posts
        ]);
    }
}
