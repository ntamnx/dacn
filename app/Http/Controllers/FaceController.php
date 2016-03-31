<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;

class FaceController extends Controller {

    public function redirectToProvider() {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback() {
        $user  = Socialite::driver('facebook')->user();
        $token = $user->token;
        //$tokenSecret = $user->tokenSecret;
        $user->getId();
        $user->getNickname();
        $user->getName();
        $user->getEmail();
        $user->getAvatar();
        echo"<pre>";
        return view('welcome', compact('user'));
    }

}
