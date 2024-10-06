@extends('layouts.main')
@section('content')
<style type="text/css">
	<style>
        .container {
            min-height: 400px; /* Prevents content container from collapsing */
            padding: 20px; /* Consistent padding */

        }

        img, table {
            max-width: 100%; /* Responsive images and tables */
            height: 300px;
            width: 100px; /* Maintain aspect ratio */
            object-fit: cover;
        }
    </style>

</style>
<body>
    <div class="container">
        <h1 class="text-center">Trekking and Heritage Tours</h1>
        <p class="text-center">Select the Tour you are interested to Join.</p>
        <div class="row mt-4">
            @foreach($places as $place)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ $place['image'] }}" class="card-img-top" alt="{{ $place['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $place['name'] }}</h5>
                            <p class="card-text">Starts at ${{ number_format($place['price']) }}</p>
                            <p class="card-text">{{ $place['description'] }}</p>
                            <p class="card-text"><small class="text-muted">{{ $place['duration'] }} days</small></p>
                            <a href="{{ $place['link'] }}" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@endsection

