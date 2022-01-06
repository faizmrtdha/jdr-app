<?php

namespace App\Http\Controllers;

use App\Models\Sidebar;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        //
        return view('about', [
            "title" => sidebar::all()
        ]);
    }
}
