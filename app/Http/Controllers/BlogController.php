<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::All();
        //dd($blogs);
        return view('blog/index', compact('blogs'));
    }

    public function create()
    {
        return view('blog/create');
    }
}
