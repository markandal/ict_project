@extends('layouts.main')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


    


@section('content')
<h3 style="text-align: center; color: #333; margin-bottom: 20px;">Register New User</h3>

    
    <form action="{{ route('guest.register') }}" method="POST" style="max-width: 400px; margin: auto; background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        @csrf

        @if ($errors->any())
            <div style="margin-bottom: 20px; padding: 10px; background-color: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; border-radius: 5px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="name" style="display: block; margin-bottom: 5px; color: #555;">Name:</label>
        <input type="text" name="name" id="name" placeholder="Name" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 5px; font-size: 16px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">

        <label for="email" style="display: block; margin-bottom: 5px; color: #555;">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 5px; font-size: 16px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">

        <label for="password" style="display: block; margin-bottom: 5px; color: #555;">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 5px; font-size: 16px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">

        <label for="password_confirmation" style="display: block; margin-bottom: 5px; color: #555;">Confirm Password:</label>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 5px; font-size: 16px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">

        <button type="submit" style="background-color: #343a40; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; width: 100%;">Register</button>


            </div>
        </div>
    </div>
</x-app-layout>
@endsection
