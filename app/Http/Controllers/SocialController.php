<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($service)
    {
        //gotta pass the service into the driver
        return Socialite::driver($service) ->scopes(['email'])->redirect();

    }

    //return to the site after redirect
    public function callback($service)
    {
        $socialUser = Socialite::driver($service)->user();

        // Example: find or create user
        $user = User::firstOrCreate(
            ['email' => $socialUser->getEmail()],
            ['name' => $socialUser->getName()]
        );

        // Log in the user
        Auth::login($user);

        // Redirect to homepage or dashboard
        return redirect()->route('home');
    }

}
