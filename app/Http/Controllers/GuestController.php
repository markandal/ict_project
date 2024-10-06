<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    // Display a list of guests
    public function index()
    {
        $guests = User::where('role', 'guest')->get(); // Fetch all guests
        return view('dash-2', compact('guests')); // Return the view with guests data
    }

    // Delete a guest from the database
    public function destroy(User $guest)
    {
        $guest->delete();
        return redirect()->route('guests.index')->with('success', 'Guest deleted successfully.');
    }
}
