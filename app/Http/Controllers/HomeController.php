<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $timeline_array = array();

        $timeline_items = app('firebase.firestore')->database()->collection('timeline')->documents();

        foreach ($timeline_items as $item) {
            array_push($timeline_array, $item->data());
        }

        $timeline_array = collect($timeline_array)->sortBy('year')->values();

        return view('home-new', compact('timeline_array'));
    }
}
