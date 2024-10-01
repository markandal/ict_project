<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuestAuthController extends Controller
{
    // Show guest login form
    public function showLoginForm()
    {
        return view('guest.auth.g-login');
    }

    // Handle guest login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('guest')->attempt($credentials)) {
            return redirect()->intended('/'); // Adjust as needed
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Show guest registration form
    public function showRegisterForm()
    {
        return view('guest.auth.g-register');
    }

    // Handle guest registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:guests',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $guest = Guest::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('guest')->login($guest);

        return redirect()->intended('/'); // Adjust as needed
    }
}



