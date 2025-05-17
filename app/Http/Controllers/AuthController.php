<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage(){
        return view('auth.login');
    }
    public function login(Request $request){
        validator($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
        if (auth()->attempt($request->only('email', 'password'))) {
            // dd($request->all());
            return redirect()->intended('/posts')->with('success', 'Login successful');
        }
        return redirect('/')->with('error', 'Login failed');
    }
    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'Logout successful');
    }
}
