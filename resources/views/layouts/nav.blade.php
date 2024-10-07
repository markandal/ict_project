<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .nav-item {
            width: 120px; /* Set a fixed width for each nav item */
            text-align: center; /* Centers the text */
        }

        .navbar-nav .nav-link {
            white-space: nowrap; /* Prevents text wrapping */
        }

        nav {
            width: 100%; /* Ensures the navbar spans the full width */
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 8px; /* Space between the link and dropdown */
            padding: 0; /* Reset padding */
            list-style: none; /* Remove bullet points */
            z-index: 1000; /* Ensure dropdown appears above other content */
        }

        .dropdown:hover .dropdown-menu {
            display: block; /* Show the dropdown menu on hover */
        }

        .dropdown-item {
            padding: 10px 15px; /* Adjust padding for dropdown items */
            text-decoration: none; /* Remove underline */
            color: #333; /* Text color */
        }

        .dropdown-item:hover {
            background-color: #f8f9fa; /* Highlight on hover */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Airplus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/packages') }}">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                    </li>

                    @if (Auth::user())
                    <li class="nav-item">
                        @if (Auth::user()->role == 'admin')
                        <a class="nav-link" href="{{ url('/dashboard') }}">Admin</a>
                        @elseif (Auth::user()->role == 'staff')
                        <div class="nav-link dropdown">
                            Staff
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/staff/s-home') }}">Inquiries</a></li>
                                <li><a class="dropdown-item" href="{{ url('/staff/booking-list') }}">Bookings</a></li>
                            </ul>
                        </div>
                        @elseif (Auth::user()->role == 'guest')
                        <a class="nav-link" href="{{ url('/guest/booking') }}">Guest</a>
                        @endif
                    </li>






                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                    @endif

<!--                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/places') }}">Place</a>
                    </li>
                -->                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include Bootstrap CSS -->


    <!-- Include Bootstrap Bundle JS (includes Popper.js) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>


