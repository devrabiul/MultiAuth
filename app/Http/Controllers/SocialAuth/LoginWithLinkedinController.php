<?php

namespace App\Http\Controllers\SocialAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class LoginWithLinkedinController extends Controller
{
    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function handleLinkedinCallback()
    {

        try {

            $user = Socialite::driver('linkedin')->user();

            // dd($user);

            $finduser = User::where('email', $user->email)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect()->route('dashboard');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'f_name' => $user->attributes['first_name'],
                    'l_name' => $user->attributes['last_name'],
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
