<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;

class SocialFacebookAuthController extends Controller
{
    public function redirect()
    {
    	return Socialite::driver('facebook')->redirect();
    }

    public function callback(Request $request)
    {
    	$user = Socialite::driver('facebook')->user();
    	Auth::login($user);
    	echo("<pre>");print_r(Auth::user());
    	die;
    	print_r($request->all());die;
    	return Socialite::driver('facebook')->redirect();
    }
}
