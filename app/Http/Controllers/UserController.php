<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
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
