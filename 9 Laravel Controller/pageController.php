<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showHome()
    {
        return view('welcome');
    }
    public function showUser(string $id)
    {
        return view('user', ['id' => $id]);
    }

    // public function showUser(string $id)
    // {
    //     return view('user', compact('id')); // agr same nam ho
    // }

    public function showBlog()
    {
        return view('blog');
    }

}
