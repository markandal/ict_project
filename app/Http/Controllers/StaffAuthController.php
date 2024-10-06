<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class StaffAuthController extends Controller
{
    // Show staff login form
    public function showLoginForm()
    {
        return view('auth.staff-login'); // Create this view later
    }

    // Handle staff login
public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::guard('staff')->attempt($credentials)) {
        return redirect()->intended(route('staff.s-home'));
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}



    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:staff',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Create the staff member with a hashed password
    $staff = Staff::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('staff.login'); // Adjust the redirect as necessary
}


    // Handle staff logout
    public function logout(Request $request)
    {
        Auth::guard('staff')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

