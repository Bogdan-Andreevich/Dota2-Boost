<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {

            $user = Socialite::driver('google')->user();

            $searchUser = User::where('google_id', $user->id)->first();

            if($searchUser){

                Auth::login($searchUser);

                return redirect()->intended(RouteServiceProvider::HOME);

            }else{
                $googleUser = User::create([
                    'name' => $user->name,
                    'email' => $user->getEmail(),
                    'google_id'=> $user->getId(),
                    'avatar' => $user->avatar,
                    'auth_type'=> 'google',
                    'password' => encrypt('gitpwd059')
                ]);

                Auth::login($googleUser);

                return redirect()->intended(RouteServiceProvider::HOME);
            }
    }
}
