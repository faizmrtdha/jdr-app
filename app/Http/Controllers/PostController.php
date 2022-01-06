<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slug)
    {
        return view('about', [
            "title" => "Post",
            'product' => post::find($slug)
        ]);
    }
}
