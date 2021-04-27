<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;

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
        auth()->login($user);
        $_SESSION["user"] = $user;

       return redirect()->to('/homeUser');
        //return redirect('/homeUser');
        
    }

    public function home()
    {
       // dd('aa');
        return view('Homeuser');
        
    }


}