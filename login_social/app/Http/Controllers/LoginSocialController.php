<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Socialite;


class LoginSocialController extends Controller
{
    public function facebookRedirect($provider = 'facebook')
    {
        return Socialite::driver($provider)->redirect();
    }

    public function loginWithFacebook($provider = 'facebook')
    {
        $providerUser = Socialite::driver($provider)->stateless()->user();

          $user = new  User();
          $user->name = $providerUser->getName();
          $user->email = $providerUser->getEmail();
          $user->password = md5(rand(1,10000));
          $user->fb_id = $providerUser->getId();
          $user->save();

      // return redirect()->to('/');
        return view('Homeuser')->with(compact('user'));

    }


}
