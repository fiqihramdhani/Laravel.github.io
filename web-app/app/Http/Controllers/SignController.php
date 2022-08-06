<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class SignController extends Controller
{
    public function index(){
    return view('SignIn',[
            "title" => "My Website - Sign-In",
            "active"=> "Sign"


        ]);

    }

    public function Authenticate(Request $request)

    {
    $credentials = $request->validate ([

    'email' => ['required', 'email:dns' ],
    'password' => ['required', 'min:5', 'max:255']


    ]);

    if(Auth::attempt($credentials))
    {
    $request->session()->regenerate();
    return redirect()->intended('/');
    }
    return back()->with('LoginError', 'Login tidak berhasil!!');
    }

    public function SignOut(Request $request){

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');




    }
}
