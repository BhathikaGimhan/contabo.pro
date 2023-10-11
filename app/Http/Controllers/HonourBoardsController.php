<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class HonourBoardsController extends Controller
{

    public function index()
    {

        $roll_call_categories = app('firebase.firestore')->database()->collection('roll_call_type')->documents();
        $roll_call_categories = $this->paginate($roll_call_categories, 12);
        return view('honour-boards', compact('roll_call_categories'));
    }

    public function paginate($items, $perPage = 16, $page = null, $options = [])
    {
        $options = ['path' => request()->url()];
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }


    public function show($id, $name)
    {
        $roll_call_info = array();
        $roll_calls = app('firebase.firestore')->database()->collection('roll_calls')->documents();

        foreach ($roll_calls as $roll_call) {
            if ($roll_call->data()['type'] == $id) {

                array_push($roll_call_info, $roll_call);
            }
        }

        $roll_call_info = collect($roll_call_info)->sortBy('year')->values();
        // $roll_call_info = $this->paginate($roll_call_info, 4);

        return view('modals.honor-boards-modal', compact('roll_call_info', 'name'));
    }

}
