@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Add New Place</h1>
    <form method="POST" action="{{ route('places.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name of the Place</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="introduction" class="form-label">Introduction</label>
            <textarea class="form-control" name="introduction" required></textarea>
        </div>
        <div class="mb-3">
            <label for="highlights" class="form-label">Highlights (comma-separated)</label>
            <input type="text" class="form-control" name="highlights" required>
        </div>
        <div class="mb-3">
            <label for="itinerary" class="form-label">Itinerary</label>
            <textarea class="form-control" name="itinerary" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="best_time" class="form-label">Best Time to Visit</label>
            <input type="text" class="form-control" name="best_time" required>
        </div>
        <div class="mb-3">
            <label for="image_1" class="form-label">First Image</label>
            <input type="file" class="form-control" name="image_1" required>
        </div>
        <div class="mb-3">
            <label for="image_2" class="form-label">Second Image</label>
            <input type="file" class="form-control" name="image_2" required>
        </div>
        <div class="mb-3">
            <label for="image_3" class="form-label">Third Image</label>
            <input type="file" class="form-control" name="image_3" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Place</button>
    </form>
</div>
@endsection
