<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function githubredirect(Request $req)
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubcallback(Request $req)
    {
        $userdata = Socialite::driver('github')->user();
        // dd($userdata);

        $userexists = User::where(['email' => $userdata->email])->where('auth_type', 'github')->get();
        //put username in session
        if ($userexists) {
            //do login
            // dd($userexists);
            $req->session()->put('user', $userexists);
            return redirect('/');
        } else {
            //do register
            $uuid = Str::uuid()->toString(); //creates a unique ID using the method Str::uuid() and then hashes the unique ID using the method Hash::make()
            $user = new User();
            $user->name = $userdata->name;
            $user->email = $userdata->email;
            $user->password = Hash::make($uuid . now());
            $user->auth_type = 'github';
            $user->avatar = $userdata->avatar;
            $user->save();
            // Auth::login('$user');
            $req->session()->put('user', $userexists);
            return redirect('/');
        }
    }

    //google OAuth
    public function googleredirect(Request $req)
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback(Request $req)
    {
        $userdata = Socialite::driver('google')->user();
        // dd($userdata);

        $userexists = User::where(['email' => $userdata->email])->where('auth_type', 'google')->get();
        //put username in session
        if ($userexists) {
            //do login
            // dd($userexists);
            $req->session()->put('user', $userexists);
            return redirect('/');
        } else {
            //do register
            $uuid = Str::uuid()->toString(); //creates a unique ID using the method Str::uuid() and then hashes the unique ID using the method Hash::make()
            $user = new User();
            $user->name = $userdata->name;
            $user->email = $userdata->email;
            $user->password = Hash::make($uuid . now());
            $user->auth_type = 'google';
            $user->avatar = $userdata->avatar;
            $user->save();
            // Auth::login('$user');
            $req->session()->put('user', $userexists);
            return redirect('/');
        }
    }
}
