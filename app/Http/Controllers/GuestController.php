<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    // Display a list of guests
    public function index()
    {
        $guests = Guest::all();
        return view('guests.index', compact('guests'));
    }

    // Show the form to create a new guest
    public function create()
    {
        return view('guests.create');
    }

    // Store a new guest in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:guests,email',
            'password' => 'required|string|min:8',
        ]);

        Guest::create($request->all());

        return redirect()->route('guests.index')->with('success', 'Guest created successfully.');
    }

    // Show the form for editing a guest
    public function edit(Guest $guest)
    {
        return view('guests.edit', compact('guest'));
    }

    // Update a guest in the database
    public function update(Request $request, Guest $guest)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:guests,email,' . $guest->id,
            'password' => 'nullable|string|min:8',
        ]);

        $guest->name = $request->name;
        $guest->email = $request->email;

        if ($request->filled('password')) {
            $guest->password = bcrypt($request->password);
        }

        $guest->save();

        return redirect()->route('guests.index')->with('success', 'Guest updated successfully.');
    }

    // Delete a guest from the database
    public function destroy(Guest $guest)
    {
        $guest->delete();
        return redirect()->route('guests.index')->with('success', 'Guest deleted successfully.');
    }
}
