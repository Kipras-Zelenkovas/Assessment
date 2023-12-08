<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Views extends Controller
{

    public function login()
    {
        return view('/login');
    }

    public function register()
    {
        return view('/register');
    }

    public function chat()
    {
        return view('/chat');
    }
}
