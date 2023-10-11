<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TourController extends Controller
{
    public function tours()
    {
        $tours=array();
        $collection = app('firebase.firestore')->database()->collection('three_d_models')->documents();
        foreach($collection as $item) {

                array_push($tours,$item);

        }

        return view('tours', compact('tours'));
    }
}
