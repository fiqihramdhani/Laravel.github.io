<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
 public function index()
    {
    return view('Home',[
            "title" => "My Website - Home",
            "Posts" => Home::latest()->get()

        ]);
    }

    public function show(Home $POST)
    {
        return view('Post',[
            "title" => "My Website || Home - Post",
            "active" => "Posts",
            "Posts" => $POST
        ]);
    }
}


