<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffAuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('staff')->attempt($credentials)) {
        return redirect()->intended('/about');
    }

    return back()->withErrors(['email' => 'Invalid credentials.']);
}

}
