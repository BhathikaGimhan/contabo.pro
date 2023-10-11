<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {

        $roll_call_categories = [];
        $principals = [];
        $staff_members = [];

//        $roll_call_categories = app('firebase.firestore')->database()->collection('roll_call_type')->documents();
//        $principals = app('firebase.firestore')->database()->collection('principle')->documents();
//        $staff_members = app('firebase.firestore')->database()->collection('staff')->documents();


        return view('story',compact('roll_call_categories','principals','staff_members'));
    }
}
