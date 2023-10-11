<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Exception;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function getProfile()
    {
        $album = $this->getMyColection();
        $user = Auth::user();
        return view('profile', compact('user', 'album'));
    }

    public function changeProfile(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => [
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => ['required', Rule::unique('users')->ignore($user->id)],
            'user_type' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ]);

        try {

            $user->update([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'title' => $request->title,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'user_type' => $request->user_type,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'city' => $request->city,
                'country' => $request->country,
                'postal_code' => $request->postal_code,
            ]);
        } catch (\Throwable $th) {
            dd($th);
        }

        return redirect(route('profile'));
    }


    public function store(Request $request)
    {
        if (File::exists(public_path('assets/images/profile/' . Auth::user()->avatar))) {
            File::delete(public_path('assets/images/profile/' . Auth::user()->avatar));
        }

        try {


            if ($request->hasFile("avatar")) {
                $file = $request->file("avatar");
                $avatarName = time() . '.' . $request->avatar->getClientOriginalExtension();
                $file->move(\public_path("assets/images/profile"), $avatarName);
                Auth()->user()->update(['avatar' => $avatarName]);
            }
        } catch (\Throwable $th) {
            dd($th);
        }

        return back()->with('success', 'Avatar updated successfully.');
    }

    public function remove()
    {
        if (File::exists(public_path('assets/images/profile/' . Auth::user()->avatar))) {
            File::delete(public_path('assets/images/profile/' . Auth::user()->avatar));
        }

        Auth()->user()->update(['avatar' => null]);

        return back();
    }


    public function getMyColection()
    {
        $result = array();
        $user = Auth::user();
        $collection_list = Collection::where('user_id', $user->id)->get();

        foreach ($collection_list as $data) {
            $album_type = $data->album_type;
            $album_id = $data->album_id;
            $album = app('firebase.firestore')->database()->collection($album_type)->document($album_id)->snapshot();
            array_push($result, array($album_type => $album));
        }

        return $result;
    }


    public function removeCollection($id)
    {
        try {
            $collection = Collection::where('album_id', $id);
            $collection->delete();
            return response()->json('success' );
        } catch (Exception $exception) {
            return response()->json(['error'=>$exception] );
        }
    }
}
