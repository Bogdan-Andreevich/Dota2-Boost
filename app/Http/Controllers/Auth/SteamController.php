<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class SteamController extends Controller
{
    public function steamRedirect()
    {
        return Socialite::driver('steam')->redirect();
    }

    public function steamCallback()
    {

            $user = Socialite::driver('steam')->user();

            $searchUser = User::where('steam_id', $user->id)->first();

            if($searchUser){

                Auth::login($searchUser);

                return redirect()->intended(RouteServiceProvider::HOME);

            }else{
                $steamUser = User::create([
                    'name' => $user->getNickname(),
                    'email' => '',
                    'steam_id' => $user->id,
                    'avatar' => $user->avatar,
                    'profile_url' => 'https://steamcommunity.com/profiles/' . $user->id,
                    'auth_type'=> 'steam',
                    'password' => encrypt('gitpwd059')
                ]);

                Auth::login($steamUser);

                return redirect()->intended(RouteServiceProvider::HOME);
            }
    }
}
