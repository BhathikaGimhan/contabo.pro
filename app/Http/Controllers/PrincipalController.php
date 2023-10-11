<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use Kreait\Firebase\ServiceAccount;
use Illuminate\Support\Arr;

class PrincipalController extends Controller
{
    public function index()
    {
        $principle_details = array();
        $get_principals = app('firebase.firestore')->database()->collection('principle')->documents();

        foreach ($get_principals  as $key => $item) {
            $x = explode("-", $item->data()['year']);
            $first_year = $x[0];


            $itemd = (int)$first_year;

            $item->year = $itemd;
            array_push($principle_details, $item);
        }

        $principals = collect($principle_details)->sortBy('year')->values();

        $principals = $this->paginate($principals, 12);

        return view('principal-data', compact('principals'));
    }

    public function search(Request $request)
    {

        $searchValue = $request->get('keyword');

        $get_principals = app('firebase.firestore')->database()->collection('principle')->where('name', 'array-contains', $searchValue)->documents();

        $members = collect($get_principals);
        return $members;

    }

    public function principalInfo($id)
    {

        $data = app('firebase.firestore')->database()->collection('principle')->documents();

        $members = collect($data)->sortBy('year')->values();

        return view('modals.principle-view', compact('members', 'id'));
    }

    public function paginate($items, $perPage = 16, $page = null, $options = [])
    {
        $options = ['path' => request()->url()];
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
