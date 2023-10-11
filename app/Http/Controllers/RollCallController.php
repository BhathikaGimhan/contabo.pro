<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class RollCallController extends Controller
{
    public function index()
    {

        $roll_call_categories = app('firebase.firestore')->database()->collection('roll_call_type')->documents();

        return view('roll-call', compact('roll_call_categories'));
    }

    public function rollCallInfo($id){
        $roll_call_info=array();
        $roll_call_type = app('firebase.firestore')->database()->collection('roll_call_type')->document($id)->snapshot();
        $roll_calls = app('firebase.firestore')->database()->collection('roll_calls')->documents();


        foreach($roll_calls as $roll_call) {
            if($roll_call->data()['type']==$id){

                array_push($roll_call_info,$roll_call);
            }
        }
        
        return view('roll-call-info',compact('roll_call_info','roll_call_type'));
    }
}
