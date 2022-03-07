<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show()
    {
        return view('about', [
            'page_name' => 'about',
            'user' => User::first()
        ]);
    }
}
