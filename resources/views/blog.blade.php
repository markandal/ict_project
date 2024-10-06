@extends('layouts.main')

@section('content')
<style>
    .container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        max-width: 1200px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .blog-content {
        flex: 2;
        margin-right: 20px;
    }

    .form-wrapper {
        flex: 1;
        position: sticky;
        top: 20px; /* Space between the top of the screen and the form */
        align-self: flex-start;
    }

    h1, h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    form {
        background-color: #fff;
        padding: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        margin-bottom: 30px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #555;
    }

    input[type="text"], textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        box-sizing: border-box;
    }

    button[type="submit"] {
        display: block;
        width: 100%;
        background-color: #000;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        text-align: center;
    }

    button[type="submit"]:hover {
        background-color: #333;
    }

    .post {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .post h3 {
        color: #333;
        font-size: 20px;
        margin-bottom: 10px;
    }

    .post p {
        color: #666;
        font-size: 16px;
    }

    .no-posts {
        text-align: center;
        color: #999;
        font-size: 18px;
        margin-top: 20px;
    }

    hr {
        border: none;
        border-top: 1px solid #eee;
        margin: 40px 0;
    }

    /* Responsive Design */
    @media (max-width: 900px) {
        .container {
            flex-direction: column;
        }

        .blog-content, .form-wrapper {
            margin: 0;
            flex: unset;
        }

        .form-wrapper {
            position: relative;
            top: unset;
        }

        form {
            max-width: 100%;
            margin: 20px auto;
        }
    }

    @media (max-width: 600px) {
        form {
            padding: 20px;
        }

        input[type="text"], textarea {
            font-size: 14px;
            padding: 10px;
        }

        button[type="submit"] {
            padding: 10px;
            font-size: 14px;
        }
    }
</style>

<h1>Blog Posts</h1>

<div class="container">

    <!-- Blog content on the left -->
    <div class="blog-content">
        <h2>All Posts</h2>
        @if($posts->count())
            @foreach($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                </div>
            @endforeach
        @else
            <p class="no-posts">No posts available.</p>
        @endif
    </div>

    <!-- Form to create a new blog post on the right -->
    <div class="form-wrapper">
        <form action="{{ route('blog') }}" method="POST">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required>
                @error('title')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="content">Content</label>
                <textarea name="content" id="content" required>{{ old('content') }}</textarea>
                @error('content')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Create Post</button>
        </form>
    </div>

</div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection


