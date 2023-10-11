<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function add(Request $request)
    {
        try {
            if (!Collection::where('album_id', $request->album_id)->exists()) {
                $collection = new Collection();
                $collection->user_id = Auth::user()->id;
                $collection->album_id = $request->album_id;
                $collection->album_type = $request->album_type;
                $collection->save();
                return response()->json(['success' => 'Added to my collection']);
            }
            else {
                return response()->json(['error' => 'Album is already added']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => $th]);
        }
    }
}
