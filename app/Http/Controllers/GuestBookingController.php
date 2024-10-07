<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;

class GuestBookingController extends Controller
{
    public function create()
    {
        $packages = Package::all();

        return view('guest.booking', compact('packages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_details' => 'required|string',
            'booking_date' => 'required|date',
        ]);

        Booking::create([
            'guest_id' => Auth::user()->id,
            'guest_name' => Auth::user()->name,
            'booking_details' => $request->booking_details,
            'booking_date' => $request->booking_date,
        ]);

        return redirect()->route('guest.booking.create')->with('success', 'Booking submitted successfully!');
    }

    public function index()
    {
        // Fetch all contacts
        $bookings = Booking::all();

        // Pass the $contacts variable to the view
        return view('staff.booking-list', compact('bookings'));
    }

    public function destroy($id)
    {
        $bookings = Booking::findOrFail($id);
        $bookings->delete();

        return redirect()->route('staff.booking-list.index')->with('success', 'Booking deleted successfully!');
    }

}

