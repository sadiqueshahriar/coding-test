<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::create($validated);

        return response()->json($post, 201);
    }

    // List all posts
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    // View a single post by ID
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }
}
