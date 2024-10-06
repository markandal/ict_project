@extends('layouts.main')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

@section('content')  

                <h3>Manage Guests</h3>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guests as $guest)
                            <tr>
                                <td>{{ $guest->name }}</td>
                                <td>{{ $guest->email }}</td>
                                <td>

                                    <!-- Delete guest form -->
                                    <form action="{{ route('guests.destroy', $guest->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this guest?');">Delete</button>
                                    </form>

                                    <!-- View Guest Modal -->
                                    <div class="modal fade" id="viewGuestModal{{ $guest->id }}" tabindex="-1" role="dialog" aria-labelledby="viewGuestModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewGuestModalLabel">Guest Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Name:</strong> {{ $guest->name }}</p>
                                                    <p><strong>Email:</strong> {{ $guest->email }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Edit Guest Modal -->
                                    <div class="modal fade" id="editGuestModal{{ $guest->id }}" tabindex="-1" role="dialog" aria-labelledby="editGuestModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editGuestModalLabel">Edit Guest</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="{{ route('guests.update', $guest->id) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" name="name" id="name" class="form-control" value="{{ $guest->name }}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" name="email" id="email" class="form-control" value="{{ $guest->email }}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="password">Password (leave blank to keep current password)</label>
                                                            <input type="password" name="password" id="password" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="password_confirmation">Confirm Password</label>
                                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update Guest</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
    </x-app-layout>
@endsection
