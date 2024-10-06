@extends('layouts.main')
@section('content')
<head>
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

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Link</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($places as $place)
                    <tr>
                        <td>{{ $place->name }}</td>
                        <td><a href="{{ $place->link }}">{{ $place->link }}</a></td>
                        <td>{{ $place->price }}</td>
                        <td>{{ $place->description }}</td>
                        <td>{{ $place->duration }} days</td>
                        <td><img src="{{ asset($place->image) }}" alt="{{ $place->name }}" width="100"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Form to Add a New Place -->
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
