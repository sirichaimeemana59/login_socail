<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('auth/facebook','LoginSocialController@facebookRedirect');

Route::get('/', function () {
   return view('home');
});

Route::get('auth/facebook/callback','LoginSocialController@loginWithFacebook');
//Route::get('homeUser','LoginSocialController@home');
Route::get('/homeUser', function () {
   return view('Homeuser');
});

