<?php

namespace App\Http\Controllers;


use App\Models\Posting;
use Illuminate\Routing\Controller;






class PostController extends Controller
{
    public function index()
    {

        return view('Blog',[
            "title" => "My Website - Blog",
            "Posts" => Posting::latest()->filter(request(['search', 'Category','User']))->paginate(3)->withQueryString()

        ]);
    }



    public function show(Posting $Post)
    {
        return view('Post',[
            "title" => "My Website - Post",
            "active" => "Posts",
            "Posts" => $Post
        ]);
    }
}

