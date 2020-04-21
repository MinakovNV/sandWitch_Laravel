<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Image;

class UserController extends Controller
{
    public function profile() {
        return view('profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request) {
        ini_set('memory_limit','512M');

        //Handle the user upload of avatar
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()));
    }

    public function profileUpdate(Request $request) {
        $user = Auth::user();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->date_of_birth = $request['date_of_birth'];
        $user->telephone_number = $request['telephone_number'];
        $user->save();
        return back();
    }
}
