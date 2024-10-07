@extends('layouts.main')

@section('content')
<div class="container">
    <h2>Booking List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Guest Name</th>
                <th>Booking Details</th>
                <th>Booking Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->guest_name }}</td>
                <td>{{ $booking->booking_details }}</td>
                <td>{{ $booking->booking_date }}</td>
                <td>
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
