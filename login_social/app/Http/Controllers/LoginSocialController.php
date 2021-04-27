<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use mysql_xdevapi\Exception;
use Socialite;


class LoginSocialController extends Controller
{
    public function facebookRedirect($provider = 'facebook')
    {
        //เรียก Library Socialite เพื่อเชื่อมต่อไปยัง Facebook
        return Socialite::driver($provider)->redirect();
    }

    public function loginWithFacebook($provider = 'facebook')
    {

        try{
        $providerUser = Socialite::driver($provider)->stateless()->user();

           //dd($providerUser);

        $user = User::where('fb_id','=',$providerUser->getId());
        $user = $user->get();


        if(count($user) == 0){
            $user_save = new  User();
            $user_save->name = $providerUser->getName();
            $user_save->email = $providerUser->getEmail();
            $user_save->password = md5(rand(1,10000));
            $user_save->fb_id = $providerUser->getId();
            $user_save->photo = $providerUser->getAvatar();

            //dd($user_save);
            $user_save->save();

            $user = User::where('fb_id','=',$providerUser->getId());
            $user = $user->get();

            return view('Homeuser')->with(compact('user'));

        }else{

            $user = User::where('fb_id','=',$providerUser->getId());
            $user = $user->get();

            return view('Homeuser')->with(compact('user'));

        }
        }catch (Exception $e){
            return redirect('/');
        }

    }


}
