<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function registeruser(Request $req){
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
}
