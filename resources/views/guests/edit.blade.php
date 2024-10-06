@extends('layouts.main')

@section('content')
<h1>Edit Guest</h1>

<form action="{{ route('guests.update', $guest) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $guest->name }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $guest->email }}" required>

    <label for="password">Password (leave blank to keep current password):</label>
    <input type="password" name="password">

    <button type="submit">Update</button>
</form>
@endsection
