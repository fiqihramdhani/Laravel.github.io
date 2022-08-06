<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index(User $users)
    {

        return view('Blog',[
            "title" => "My Website - User Posts",
            "Posts" => $users->Posts

        ]);

    }
}
