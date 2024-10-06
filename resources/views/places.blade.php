@extends('layouts.main')
@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Places</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @foreach ($places as $place)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($place->image) }}" class="card-img-top" alt="{{ $place->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $place->name }}</h5>
                            <p class="card-text">{{ $place->description }}</p>
                            <p class="card-text"><strong>Price: </strong>${{ $place->price }}</p>
                            <p class="card-text"><strong>Duration: </strong>{{ $place->duration }} days</p>
                            <a href="{{ $place->link }}" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Form to Add a New Place -->
        <h2 class="mt-4">Add New Place</h2>
        <form method="POST" action="{{ route('places.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Place Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="duration">Duration (in days)</label>
                <input type="number" name="duration" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image">Image Path</label>
                <input type="text" name="image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Place</button>
        </form>
    </div>
</body>
</html>

@endsection
