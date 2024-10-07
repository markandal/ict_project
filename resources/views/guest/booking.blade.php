@extends('layouts.main')

@section('content')
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<div class="container">
    <form action="{{ route('guest.booking.store') }}" method="POST" style="max-width: 400px; margin: 50px auto; padding: 30px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        @csrf

        <h1>Hello {{ Auth::user()->name }}</h1>

        <h3 style="text-align: center; margin-bottom: 20px;">Book Now</h3>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="booking_details" style="font-weight: bold; display: block; margin-bottom: 5px;">Booking Details</label>
            <select id="booking_details" name="booking_details" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="" disabled selected>Select Booking Details</option>
                @foreach($packages as $package)
                    <option value="{{$package->name}}">{{$package->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="booking_date" style="font-weight: bold; display: block; margin-bottom: 5px;">Select a Date</label>
            <input type="text" id="booking_date" name="booking_date" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px; text-align: center;">
            <button type="submit" class="btn btn-primary" style="background-color: #000; padding: 10px 20px; color: #fff; border-radius: 4px; border: none; cursor: pointer;">Submit</button>
        </div>
    </form>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    // Initialize Flatpickr on the booking date input
    flatpickr("#booking_date", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        minDate: "today", // Disable past dates
    });
</script>


@endsection

<!-- Flatpickr CSS and JS -->



