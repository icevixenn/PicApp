<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editAccount(User $user)
    {
        $user = Auth::user();
        return view('pages/account', compact('user'));
    }

    public function update(User $user)
    {
        if(Auth::user()->email == request('email')) {

            $this->validate(request(), [
                'name' => 'required',
                'password' => 'required|min:6|confirmed'
            ]);

            $user->name = request('name');
            $user->surname = request('surname');
            $user->address = request('address');
            $user->website = request('website');
            $user->bio = request('bio');
            $user->password = bcrypt(request('password'));

            $user->save();

            return redirect('pages/account')->with('success', 'Information edited successfully!');

        }
        else{

            return redirect('pages/account')->with('error', 'There has been an error. Try again later.');

        }
    }

    public function editPicture($id){

        $user = User::find($id);
        return view('pages/account')->with('user', $user);
    }

    public function updatePicture(Request $request, $id){

        $user = User::find($id);

        $this->validate($request,  [
            'user_photo' => 'required|image'
        ]);
        // dd($user->id);

            $fileNameWithExtension = $request->file('user_photo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('user_photo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $request->file('user_photo')->storeAs('public/user_photos', $fileNameToStore);
            $user->user_photo = $fileNameToStore;
            $user->save();
            return redirect('pages/account')->with('success', 'Photo edited successfully!');


    }
}
