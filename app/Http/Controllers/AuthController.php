<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // Handle login logic here
        
    }

    public function register()
    {
        return view('auth.register');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }
}
