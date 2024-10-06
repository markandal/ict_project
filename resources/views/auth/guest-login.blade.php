@extends('layouts.main')

@section('content')
<br>

<form action="{{ route('guest.login') }}" method="post" style="max-width: 400px; margin: auto; background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
    @csrf
    <h1 style="text-align: center; color: #333; margin-bottom: 20px;">User</h1>
    
    <label for="email" style="display: block; margin-bottom: 5px; color: #555;">Email</label>
    <input type="email" name="email" id="email" placeholder="Email" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 5px; font-size: 16px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">
    
    <label for="password" style="display: block; margin-bottom: 5px; color: #555;">Password</label>
    <input type="password" name="password" id="password" placeholder="Password" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 5px; font-size: 16px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <button type="submit" style="background-color: #343a40; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; width: 100%;">Login</button>

    <div style="text-align: center; margin-top: 15px;">
        <p style="margin: 0;">Don't have an account? <a href="{{ route('guest.register') }}" style="color: #007bff; text-decoration: none;">Register</a></p>
    </div>
</form>



@endsection