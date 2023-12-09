<?php

namespace App\Http\Controllers;

use App\Models\Chats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $chats = Chats::where('user_id', Auth::id())->get();

        return view('/chat', ['chats' => $chats]);
    }
}
