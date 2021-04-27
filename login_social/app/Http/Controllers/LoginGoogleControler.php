<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Socialite;

class LoginGoogleControler extends Controller
{
    public function redirectToGoogle($provider = 'google')
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleGoogleCallback($provider = 'google')
    {
        $providerUser = Socialite::driver($provider)->stateless()->user();

        $user = new  User();
        $user->name = $providerUser->getName();
        $user->email = $providerUser->getEmail();
        $user->password = md5(rand(1,10000));
        $user->google_id = $providerUser->getId();
        $user->save();

        // return redirect()->to('/');
        return view('Homeuser')->with(compact('user'));

    }
}
