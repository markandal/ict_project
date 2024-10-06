
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Profile - {{ $guest->name }}</title>
    <!-- Include any CSS or JS files here -->
</head>
<body>
    <h1>Guest Profile: {{ $guest->name }}</h1>

    <div>
        <p><strong>Email:</strong> {{ $guest->email }}</p>
        <p><strong>Joined on:</strong> {{ $guest->created_at->format('d M Y') }}</p>
        <p><strong>Description:</strong> {{ $guest->description ?? 'No description available.' }}</p>
        <!-- Add any other fields you'd like to display -->
    </div>

    <a href="{{ route('guest.logout') }}">Logout</a> <!-- Adjust the logout route as necessary -->
</body>
</html>
