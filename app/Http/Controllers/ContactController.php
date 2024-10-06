<?php

// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the contact form
    public function create()
    {
        return view('contact');
    }

    // Store the form submission
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'package' => 'required|string|max:255',
        ]);

        Contact::create($validatedData);

        return redirect()->route('contact.create')->with('success', 'Booking form submitted successfully!');
    }

    // Show submissions in the admin dashboard
    public function showContacts()
    {
        // Fetch all contacts
        $contacts = Contact::all();

        // Pass the $contacts variable to the view
        return view('staff.s-home', compact('contacts'));
    }
    // Delete a submission
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('staff.s-home')->with('success', 'Booking deleted successfully!');
    }
}

