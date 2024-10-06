<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    // Display a list of places
    public function index()
    {
        $places = Place::all();
        return view('places', compact('places'));
    }

    public function show($id)
    {
        $place = Place::findOrFail($id); // Retrieve the place by ID or fail if not found
        return view('show', compact('place')); // Return the view with the place details
    }

    // Store a new place in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'introduction' => 'required|string',
            'highlights' => 'required|string',
            'itinerary' => 'required|string',
            'price' => 'required|numeric',
            'best_time' => 'required|string',
            'image_1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store images
        $imagePath1 = $request->file('image_1')->store('images', 'public');
        $imagePath2 = $request->file('image_2')->store('images', 'public');
        $imagePath3 = $request->file('image_3')->store('images', 'public');

        // Create new place
        Place::create([
            'name' => $request->name,
            'introduction' => $request->introduction,
            'highlights' => json_encode(explode(',', $request->highlights)), // Storing highlights as JSON
            'itinerary' => $request->itinerary,
            'price' => $request->price,
            'best_time' => $request->best_time,
            'image_1' => $imagePath1,
            'image_2' => $imagePath2,
            'image_3' => $imagePath3,
        ]);

        return redirect()->route('places')->with('success', 'Place added successfully!');
    }
}

