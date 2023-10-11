<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Socialite;

class MicrosoftAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('graph')->redirect();
    }

    public function callbackMicrosoft()
    {
        try {

            $microsoft_user = Socialite::driver('graph')->user();

            $user = User::where('microsoft_id', $microsoft_user->getId())->first();

            if (!$user) {
                $new_user = User::create([
                    'email' => $microsoft_user->getEmail(),
                    'microsoft_id' => $microsoft_user->getId(),
                    'first_name' => $microsoft_user->user['givenName'],
                    'last_name' => $microsoft_user->user['surname'],
                ]);

                Auth::login($new_user);

                return redirect()->intended('register-step2');
            } else {
                Auth::login($user);

                return redirect()->intended('home');
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
