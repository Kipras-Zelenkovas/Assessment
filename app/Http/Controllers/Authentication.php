<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{

    public function register(Request $request)
    {
        try {
            $request->validate([
                'userName'  => 'required|min:6|max:30|string',
                'email'     => 'required|email:rfc,dns',
                'password'  => 'required|min:8|max:40'
            ]);

            $user = User::create([
                'userName'  => $request->userName,
                'email'     => $request->email,
                'password'  => Hash::make($request->password)
            ]);

            $user->save();

            return redirect('/auth/login');
        } catch (\Throwable $th) {
            // return redirect('/auth/register');
            return response()->json($th->getMessage());
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email'     => 'required|email:rfc,dns',
                'password'  => 'required|min:8|max:40'
            ]);

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $request->session()->regenerate();

                return redirect('/');
            }

            return redirect('/auth/login');
        } catch (\Throwable $th) {
            return redirect('/auth/login');
        }
    }

    public function logout(Request $request)
    {
        try {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/auth/login');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
}
