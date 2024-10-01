@extends('layouts.main')


@section('content')
<style>
    .about-container {
        text-align: center;
        padding: 50px;
    }

    .bubbles-container {
        display: flex;
        justify-content: center;
        gap: 150px;
        margin-top: 40px;
    }

    .bubble {
        width: 250px;
        height: 250px;
        background-color: #f0f0f0;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .bubble:hover {
        transform: scale(1.05);
    }

    .icon img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    h3 {
        margin-top: 20px;
        font-size: 20px;
        font-weight: bold;
    }

    p {
        font-size: 16px;
        color: #666;
    }
</style>
    <div class="about-container">
        <h1>About Us</h1>
        <p>We are a group of students from BIT</p>

        <div class="bubbles-container">
            <!-- Bubble 1 -->
            <div class="bubble">
                <div class="icon">
                    <img src="images/about-img/apsara.jpg" alt="Icon 1">
                </div>
                <h3>Apsara</h3>
                <p>Web Developer from Nepal</p>
            </div>

            <!-- Bubble 2 -->
            <div class="bubble">
                <div class="icon">
                    <img src="images/about-img/bhuwan.jpg" alt="Icon 2">
                </div>
                <h3>Bhuwan</h3>
                <p>Web Developer from Nepal</p>
            </div>

            <!-- Bubble 3 -->
            <div class="bubble">
                <div class="icon">
                    <img src="images/about-img/mark.jpg" alt="Icon 3">
                </div>
                <h3>Mark</h3>
                <p>Web Developer from Philippines</p>
            </div>
        </div>
    </div>
@endsection
