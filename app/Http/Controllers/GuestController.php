<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function show($id)
    {
        // Retrieve the guest by ID
        $guest = Guest::findOrFail($id); // This will throw a 404 if not found

        return view('guests.show', compact('guest')); // Pass the guest data to the view
    }
}
