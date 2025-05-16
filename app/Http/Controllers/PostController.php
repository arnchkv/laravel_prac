<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display all posts
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    
    }
    public function create()
    {
        // Logic to show the form for creating a new post
        $users = User::all();
        return view('posts.create', compact('users'));
    }
    public function store(Request $request)
    {
        // Logic to store a new post
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);
        Post::create($data);
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
    public function show($id)
    {
        // Logic to display a single post
    }
    public function edit(Post $post)
    {
        // Logic to show the form for editing a post
        $users = User::all();
        return view('posts.edit', compact('post', 'users'));
    }
    public function update(Request $request, $id)
    {
        // Logic to update a post
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'content' => 'required|string'
        ]);

        Post::find($id)->update($data);
        return redirect('/')->with('success', 'Post updated successfully.');

    }
    public function destroy($id)
    {
        // Logic to delete a post
        Post::destroy($id);
        return redirect('/')->with('success', 'Post deleted successfully.');
    }
}
