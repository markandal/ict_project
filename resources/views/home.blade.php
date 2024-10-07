@extends('layouts.main')

@section('title', 'AIRPLUS')

@section('content')
<style>
    .hero-section {
        height: 100vh; /* Ensures it covers the whole viewport height */
        background-size: cover;
        background-position: center;
        color: white;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 0;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5); /* Slightly darker overlay for better text contrast */
        z-index: 0;
    }

    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 700px;
        padding: 20px;
        font-family: 'Source Code Pro';
    }

    h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
        

    }

    p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        font-weight: 300;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: 500;
        color: white;
        text-decoration: none;
    }


    .cta-button {
        background-color: #ff9800;
        color: #fff;
        padding: 15px 30px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 1.2rem;
    }

    .cta-button:hover {
        background-color: #e68900;
    }

    /* Destinations Section */
    .destinations-section {
        text-align: center;
        padding: 50px 0;
    }

    .destinations-container {
        display: flex;
        justify-content: space-around;
        gap: 30px;
        margin-top: 30px;
    }

    .destination-card {
        background-color: #f0f0f0;
        border-radius: 10px;
        padding: 20px;
        width: 300px;
        text-align: center;
    }

    .destination-card img {
        width: 100%;
        border-radius: 10px;
    }

    /* Services Section */
    .services-section {
        text-align: center;
        padding: 50px 0;
        background-color: #f7f7f7;
    }

    .services-container {
        display: flex;
        justify-content: space-around;
        gap: 30px;
        margin-top: 30px;
    }

    .service-card {
        width: 250px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .service-card i {
        font-size: 3rem;
        margin-bottom: 15px;
        color: #ff9800;
    }

    /* Call to Action Section */
    .cta-section {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 50px 0;
    }

    .cta-section h2 {
        font-size: 2.5rem;
        margin-bottom: 30px;
    }
</style>
<div class="hero-section text-center d-flex align-items-center justify-content-center" 
style="background-image: url('{{ asset('images/home-bg.jpg') }}');">
<div class="hero-content">
    <h1 class="display-4">Welcome to Airplus {{ Auth::guest()->name ?? '' }}!</h1>
    <p class="lead">Discover beautiful destinations, unique experiences, and unforgettable moments. Let us plan your next adventure!</p>

    <a href="/programs" class="btn btn-primary btn-lg mt-4">See Available Packages</a>
</div>
</div>


<!-- Popular Destinations Section -->
<div class="destinations-section">
    <h2>Popular Destinations</h2>
    <div class="destinations-container">
        <div class="destination-card">
            <img src="{{ asset('images/annapurna-main.jpg') }}" alt="Destination 1">
            <h3>ANNAPURNA</h3>
            <p>Journey through diverse landscapes, from lush forests to high-altitude deserts, with stunning views of the Annapurna range.</p>
        </div>
        <div class="destination-card">
            <img src="{{ asset('images/kath-main.jpg') }}" alt="Destination 2">
            <h3>KATHMANDU</h3>
            <p>A cultural trek that takes you through ancient temples, bustling markets, and traditional villages, offering a glimpse into the vibrant heritage and spirituality of Nepal's capital and surrounding hills.</p>
        </div>
        <div class="destination-card">
            <img src="{{ asset('images/langtang-main.jpg') }}" alt="Destination 3">
            <h3>LANGTANG</h3>
            <p>Explore the serene Langtang Valley, surrounded by towering peaks and alpine meadows.</p>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="services-section">
    <h2>Our Services</h2>
    <div class="services-container">
        <div class="service-card">
            <i class="fas fa-plane"></i>
            <h3>Trek Bookings</h3>
            <p>Book treks to any destination in Nepal with ease and flexibility.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-globe"></i>
            <h3>Guided Tours</h3>
            <p>Explore destinations with our curated, expert-guided tours.</p>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="cta-section">
    <h2>Ready for Your Next Adventure?</h2>
    <a href="/contact" class="cta-button">Contact Us</a>
</div>
</div>
    @endsection
