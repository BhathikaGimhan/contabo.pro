<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterStep2Controller extends Controller
{
   public function create()
   {
        return view('auth.register-final');
   }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => ['required', 'unique:users',],
            'user_type' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ]);

        try {

            Auth::user()->update([
                'title' => $request->title,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'user_type' => $request->user_type,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'city' => $request->city,
                'country' => $request->country,
                'postal_code' => $request->postal_code,
            ]);

        } catch (\Throwable $th) {
            dd($th);
        }


        return redirect(route('home'));
    }
}
