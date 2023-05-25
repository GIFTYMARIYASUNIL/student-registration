<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SigninController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $userdata = array(
            'email' => $request->email,
            'password' => $request->password
        );
        // dd($userdata);
        if (Auth::attempt($userdata)) {
            if (auth()->user()->status == 0) {
             
            return Redirect::to('/dashboard');
        } else {
            return Redirect::to('/')->with('success',"invalid username or password");
        }
    }
}
}


