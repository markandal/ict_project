<?php

namespace App\Http\Controllers;

use App\Models\Contact; // Ensure this line is present
use Illuminate\Http\Request;

class StaffHomeController extends Controller
{
    public function index()
    {
        // Fetch contacts from the database
        $contacts = Contact::all(); // Adjust this as needed (e.g., use pagination, filtering)

        // Pass contacts to the view
        return view('staff.s-home', compact('contacts')); // or return view('staff.s-home')->with('contacts', $contacts);
    }
}

