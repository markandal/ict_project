@extends('layouts.main')

@section('content')
<h1>Create Guest</h1>

<form action="{{ route('guests.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Create</button>
</form>
@endsection
