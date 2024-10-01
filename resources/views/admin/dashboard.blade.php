

@section('content')
<div class="container">
    <h2>Contact Submissions</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Package</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $contact) <!-- Use forelse to handle empty state -->
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->package }}</td>
                <td>
                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No contacts found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
