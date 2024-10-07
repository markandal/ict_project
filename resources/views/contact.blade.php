@extends('layouts.main')

@section('content')
<div class="container">
    <h2>Inquire</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <form action="{{ route('contact.store') }}" method="POST" style="max-width: 400px; margin: 50px auto; padding: 30px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
    @csrf
    <h3 style="text-align: center; margin-bottom: 20px;">Inquiry Form</h3>

    <div class="form-group" style="margin-bottom: 15px;">
        <label for="package" style="font-weight: bold; display: block; margin-bottom: 5px;">Package</label>
        <input type="text" class="form-control" name="package"  value="{{request('package')}}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div class="form-group" style="margin-bottom: 15px;">
        <label for="name" style="font-weight: bold; display: block; margin-bottom: 5px;">Your Name</label>
        <input type="text" class="form-control" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div class="form-group" style="margin-bottom: 15px;">
        <label for="phone" style="font-weight: bold; display: block; margin-bottom: 5px;">Phone</label>
        <input type="text" class="form-control" name="phone" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div class="form-group" style="margin-bottom: 15px;">
        <label for="email" style="font-weight: bold; display: block; margin-bottom: 5px;">Email</label>
        <input type="email" class="form-control" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div class="form-group" style="margin-bottom: 15px; text-align: center;">
        <button type="submit" class="btn btn-primary" style="background-color: #000; padding: 10px 20px; color: #fff; border-radius: 4px; border: none; cursor: pointer;">Submit</button>
    </div>
</form>

@endsection
