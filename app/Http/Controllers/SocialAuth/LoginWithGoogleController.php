<?php

namespace App\Http\Controllers\SocialAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;


class LoginWithGoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {

        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('email', '=', $user->email)->first();
            // dd($user);

            if($finduser){
                Auth::login($finduser);
                return redirect()->route('dashboard');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'f_name' => $user->user['given_name'],
                    'l_name' => $user->user['family_name'],
                    'email' => $user->email,
                    'password' => encrypt('123456dummy'),
                    'email_verified_at' => Carbon::now(),
                    'image_url' => $user->attributes['avatar_original'],
                ]);

                Auth::login($newUser);

                return redirect()->route('dashboard');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
