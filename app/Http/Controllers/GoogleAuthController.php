<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Socialite;

class GoogleAuthController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();


            $user = User::where('google_id', $google_user->getId())->first();


            if (!$user) {
                if ($google_user->getAvatar()) {
                    $filename = time().".jpg";
                    file_put_contents(
                        "../public/assets/images/profile/".$filename,
                        file_get_contents($google_user->getAvatar())
                    );
                }
                
                $new_user = User::create([
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'first_name' => $google_user->user['given_name'],
                    'last_name' => $google_user->user['family_name'],
                    'avatar' => $filename,
                ]);

                Auth::login($new_user);

                return redirect()->intended('register-step2');
            } else {
                Auth::login($user);

                return redirect()->intended('home');
            }
        } catch (\Throwable $th) {
            dd('Something went wrong! '. $th->getMessage());
        }
    }
}
