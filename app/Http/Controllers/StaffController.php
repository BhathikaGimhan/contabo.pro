<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class StaffController extends Controller
{
    public function index()
    {
        $staff_members = app('firebase.firestore')->database()->collection('staff')->documents();
        $staff_members = $this->paginate($staff_members, 12);
        return view('staff-data', compact('staff_members'));
    }

    public function staffInfo($id)

    {
        $members = app('firebase.firestore')->database()->collection('staff')->documents();

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
