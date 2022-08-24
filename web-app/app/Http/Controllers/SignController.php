<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;



class SignController extends Controller
{
    public function index()
    {
        return view('SignIn', [
            "title" => "My Website - Sign-In",
            "active" => "Sign"


        ]);
    }

    public function googleRedirect()
    {
        return Socialite::driver('google')

            ->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver(driver: 'google')->user();
        $this->createOrUpdateUser($user, 'google');


        return redirect('/');
    }
    public function createOrUpdateUser($data, $provider)
    {
        $user = User::where('email', $data->email)->first();
        if ($user) {
            $user->update([
                'remember_token' => $data->token,
                'refresh_token' => $data->refreshToken



            ]);
        } else {
            $user = User::create([
                'name' => $data->name,
                'email' => $data->email,
                'provider' => $provider,
                'provider_id' => $data->id,
                'avatar' => $data->avatar,
                'remember_token' => $data->token





            ]);
            Auth::login($user);
        }
    }

    public function Authenticate(Request $request,)

    {
        $credentials = $request->validate([

            'email' => ['required', 'email'],
            'password' => ['required', 'min:5', 'max:255']


        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('LoginError', 'Login tidak berhasil!!');
    }

    public function SignOut(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate(session());

        $request->session()->regenerateToken();



        return redirect('/');
    }
}
