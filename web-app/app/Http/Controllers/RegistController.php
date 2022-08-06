<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegistController extends Controller
{
    public function index()
    {
    return view('Registrasi',[
            "title" => "My Website - Registrasi",
            "active"=> "Registrasi"


        ]);

    }

    public function store(Request $request)
    {
   $validate = $request->validate([
    'name' => ['required' , 'max:255', ],
    'email' => ['required', 'email:dns', 'unique:users' , 'max:255' ],
    'password' => ['required', 'min:5', 'max:255']


    ]);

    $validate['password']= Hash::make($validate['password']);
     User::create($validate);

     return redirect('/Sign')->with('success', 'Registrasi Berhasil || Silahkan Login!!');
    }

}
