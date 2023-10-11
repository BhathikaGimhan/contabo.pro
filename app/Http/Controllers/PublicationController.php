<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {

        $publications = app('firebase.firestore')->database()->collection('publications')->documents();

        return view('publications', compact('publications'));
    }

    public function sample()
    {
        return view('express-pdf');
     }
}
