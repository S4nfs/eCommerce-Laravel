<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Storage;


class UserController extends Controller
{
    function registeruser(Request $req)
    {
        $data = new User;   //new instance or object
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Hash::make($req->password);
        $data->save();
        return redirect('/login');
    }
    // ------------------------------------------------------------------
    function login(Request $req)
    {
        $data = User::where(['email' => $req->email])->get();
        if ($data || Hash::check($req->password, $data->password)) {
            $req->session()->put('user', $data);
            return redirect('/');
        } else {
            return "Username or Password not Matching";
        }
    }

    //Uploading, Deleting Old Avatar, Updating-------------------------------------------------------------------------------
    function uploader(Request $req)

    {
        if (session()->has('user')) {
            $userId = Session()->get('user')[0]->id;
            if ($req->hasFile('image')) {
                $myavatarName = $req->image->getClientOriginalName();
                //delete old avatar image if exists
                $this->deleteOldAvatar();
                $req->image->storeAs('avatars', $myavatarName, 'public'); //('folder', $filename, 'directory')
                User::find($userId)->update(['avatar' => $myavatarName]);
                return redirect()->back()->with('message', 'Avatar Updated Successfully'); //show flash message

            }
        } else {
            return redirect('/login');
        }
    }

    protected function deleteOldAvatar()
    {
        $userId = Session()->get('user')[0]->id;
        if (User::find($userId)->avatar != "") {
            $oldAvatar = User::find($userId)->avatar;
            Storage::delete('/public/avatars/' . $oldAvatar);   //Storage:: = (/storage/app/)
        }
    }

    function fetchprofile()
    {
        if (session()->has('user')) {
            $userId = Session()->get('user')[0]->id;
            //get user data
            $user = User::find($userId);
            return view('profile', ['userdata' => $user]);
        } else {
            return redirect('login');
        }
    }
}
