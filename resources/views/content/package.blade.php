@extends('layouts.main')

@section('content')
<style>
.place-container {
    display: flex;
    margin: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.place-image {
    position: relative;
    width: 40%; /* Adjusted width for the image container */
}

.main-image {
    width: 100%; /* Main image full width of its container */
    height: auto;
    border-bottom: 2px solid #4CAF50; /* Green border */
}

.additional-images {
    display: flex; /* Arrange side images in a row */
    flex-wrap: wrap; /* Allow wrapping of images */
    margin-top: 10px;
}

.side-image {
    width: 32%; /* Adjusted width for side images to fit three in a row */
    margin-right: 1%; /* Margin for spacing */
    border-radius: 4px;
    transition: transform 0.2s; /* Add hover effect */
}

.side-image:last-child {
    margin-right: 0; /* Remove margin for the last image */
}

.side-image:hover {
    transform: scale(1.05); /* Scale effect on hover */
}

.place-info {
    padding: 40px;
    background-color: #f9f9f9;
    width: 60%; /* Adjusted width for the info container */
}

.place-info h1 {
    font-size: 40px;
    color: #333;
}

.place-info h2 {
    font-size: 20px;
    color: #4CAF50;
    margin-top: 15px;
}

.place-info p,
.place-info ul {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    border-radius: 8px;
}

.close-button {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close-button:hover,
.close-button:focus {
    color: black;
    cursor: pointer;
}

</style>

<div class="place-container">
    <div class="place-image">
        <img src="{{ asset($package->main_image) }}" class="main-image">
        <div class="additional-images">
            @foreach(json_decode($package->additional_images) as $image)
                <img src="{{ asset($image) }}" class="side-image">
            @endforeach
        </div>
    </div>
    <div class="place-info">
        <h1>{{ $package->name }}</h1>
        {!! $package->description !!}
        <button id="contact-button">Inquire</button> <!-- Button triggers the modal -->
    </div>
</div>

<!-- Modal Structure -->
<div id="contact-modal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <div id="modal-body"></div> <!-- Content of contact.blade.php will load here -->
    </div>
</div>

<script>
// JavaScript to handle modal functionality
document.getElementById("contact-button").onclick = function() {
    // Fetch the contact form from Laravel route and insert into the modal
    fetch("{{ url('/contact?package=' . $package->name) }}") // Laravel route that returns the contact view
        .then(response => response.text())
        .then(data => {
            document.getElementById("modal-body").innerHTML = data;
            document.getElementById("contact-modal").style.display = "block"; // Show the modal
        })
        .catch(error => console.error('Error fetching contact form:', error));
};

// Close the modal when the close button is clicked
document.querySelector(".close-button").onclick = function() {
    document.getElementById("contact-modal").style.display = "none"; // Hide the modal
};

// Close the modal if clicking outside of the modal content
window.onclick = function(event) {
    if (event.target === document.getElementById("contact-modal")) {
        document.getElementById("contact-modal").style.display = "none"; // Hide the modal
    }
};
</script>


@endsection
