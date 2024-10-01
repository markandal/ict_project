<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Display and handle the blog page
    public function blog(Request $request)
    {
        // Fetch all blog posts
        $posts = Post::all();

        // If the request is a POST (form submission), handle the form input
        if ($request->isMethod('post')) {
            // Validate the form data
            $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
            ]);

            // Create a new post in the database
            Post::create([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);

            // Redirect back to the same page to display the new post
            return redirect()->route('blog');
        }

        // Render the view and pass the blog posts to the view
        return view('blog', compact('posts'));
    }
}

