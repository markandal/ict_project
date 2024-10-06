<?php

namespace App\Http\Controllers;

use App\Models\Guest; // Import the Guest model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.guest-login'); // Return the login view
    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the guest in
        if (Auth::guard('guest')->attempt($request->only('email', 'password'))) {
        // Set a custom welcome message
        $guestName = Auth::guard('guest')->user()->name; // Get the guest's name
        return redirect()->route('home')->with('guestName', $guestName); // Pass the guest's name to the session
    
    }

        // If authentication fails, redirect back with an error message
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('guest')->logout(); // Log out the guest
        return redirect('/guest/login')->with('success', 'You have been logged out.');
    }
}
