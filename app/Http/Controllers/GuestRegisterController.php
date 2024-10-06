<?php

namespace App\Http\Controllers;

use App\Models\Guest; // Import the Guest model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuestRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.guest-register');
    }

    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:guests', // Ensure email is unique
            'password' => 'required|string|min:8|confirmed', // Ensure password is confirmed
        ]);

        // Create a new guest
        Guest::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), // Hash the password
        ]);

        return redirect()->route('guest.login')->with('success', 'Registration successful!'); // Redirect with success message
    }
}

