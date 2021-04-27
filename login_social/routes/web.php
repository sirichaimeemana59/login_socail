<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
   return view('home');
});

//Facebook

Route::get('auth/facebook','LoginSocialController@facebookRedirect');

Route::get('auth/facebook/callback','LoginSocialController@loginWithFacebook');



//Google
Route::get('auth/google','LoginGoogleControler@redirectToGoogle');
Route::get('auth/google/callback','LoginGoogleControler@handleGoogleCallback');

