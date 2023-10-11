<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class InformationController extends Controller
{
    public function send(Request $request)
    {
        Mail::send('mail', array(
            'photo_id' => $request->get('photo_id'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'comment' => $request->get('comment'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('phrmanilkadilshan@gmail.com', 'Admin')->subject('More Information');
        });

        return response()->json(['message' => 'success']);
    }
}
