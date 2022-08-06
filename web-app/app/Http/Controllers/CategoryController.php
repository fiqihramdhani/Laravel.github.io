<?php

namespace App\Http\Controllers;


use App\Models\Category;

use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
   public function index()
    {
        return view('Categories',[
        "title" => "Category",
        "Categories"=>Category::all()
    ]);

    }



    public function show(Category $Category)
    {
       return view('Blog',[
        "title" =>"My Website - $Category->name",
        "Posts" => $Category->Posts,

    ]);
    }
}
