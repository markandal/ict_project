<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Specify the table if it's not the default 'bookings'
    protected $table = 'bookings';

    // Specify which fields can be mass-assigned
    protected $fillable = [
        'guest_id',
        'guest_name',
        'booking_details',
        'booking_date',
    ];

    /**
     * Define the relationship with the guest (user).
     * Assuming you have a 'Guest' model for guests.
    public function index()
    {
        $bookings = Booking::where('user_id', role()->id())->get();
        return view('guest.booking', compact('bookings'));
    }

    /**
     * Accessor to format the booking date in a more readable format if needed.
     */
    public function getFormattedBookingDateAttribute()
    {
        return \Carbon\Carbon::parse($this->booking_date)->format('F j, Y');
    }

}

