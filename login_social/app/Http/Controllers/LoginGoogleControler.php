<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use Socialite;

class LoginGoogleControler extends Controller
{
    public function redirectToGoogle($provider = 'google')
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleGoogleCallback($provider = 'google')
    {
        try{
            $providerUser = Socialite::driver($provider)->stateless()->user();

            $user = User::where('google_id','=',$providerUser->getId());
            $user = $user->get();

            if(count($user) == 0) {
                $user_save = new  User();
                $user_save->name = $providerUser->getName();
                $user_save->email = $providerUser->getEmail();
                $user_save->password = md5(rand(1, 10000));
                $user_save->google_id = $providerUser->getId();
                $user_save->save();

                $user = User::where('google_id','=',$providerUser->getId());
                $user = $user->get();

                // return redirect()->to('/');
                return view('Homeuser')->with(compact('user'));
            }else{
                return view('Homeuser')->with(compact('user'));
            }
        }catch (Exception $e){

        }

    }
}
