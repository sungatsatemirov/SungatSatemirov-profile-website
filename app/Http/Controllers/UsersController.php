<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Storage;
class UsersController extends Controller
{
    //
    public function index(){
        $users = UserInformation::all();
        return view('users.index')->with(['usersInfo' => $users]);
    }
    public function store(Request $request) {
        $this->validate($request, [
            'profile_photo' => 'mimes:jpeg,png,jpg',
          ]);

          
          if ($request->hasFile('profile_photo')) {
            $extension = $request->profile_photo->getClientOriginalExtension();
            $fileName = $request->profile_photo->getClientOriginalName();
            $request->file('profile_photo')->storeAs('/uploads', $fileName);
            $url = Storage::url($fileName);

            $user = UserInformation::create([
                'email' => $request->email,
                'name' => $request->name,
                'surname' => $request->surname,
                'profile_photo' => $url
            ]);

        return back();
    }
    else {
        abort(501, 'There is some problem with uploading image');
    }
}
}
