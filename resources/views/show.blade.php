@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="mt-4">{{ $place->name }}</h1>
    
    <!-- Display all three images -->
    <div class="row mb-4">
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $place->image_1) }}" class="img-fluid" alt="{{ $place->name }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $place->image_2) }}" class="img-fluid" alt="{{ $place->name }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $place->image_3) }}" class="img-fluid" alt="{{ $place->name }}">
        </div>
    </div>
    
    <h3>Introduction</h3>
    <p>{{ $place->introduction }}</p>

    <h3>Highlights</h3>
    <ul>
        @foreach (json_decode($place->highlights) as $highlight)
            <li>{{ trim($highlight) }}</li>
        @endforeach
    </ul>

    <h3>Itinerary</h3>
    <p>{{ $place->itinerary }}</p>

    <h3>Price</h3>
    <p>${{ $place->price }}</p>

    <h3>Best Time to Visit</h3>
    <p>{{ $place->best_time }}</p>

    <button class="btn btn-primary" id="bookNowBtn" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</button>
</div>

<!-- Modal for Booking -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Booking for {{ $place->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('places.book', $place->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <!-- Additional booking information as needed -->
                    <button type="submit" class="btn btn-primary">Confirm Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
