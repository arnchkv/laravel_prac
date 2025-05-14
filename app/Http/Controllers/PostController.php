<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display all posts
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    
    }
    public function create()
    {
        // Logic to show the form for creating a new post
    }
    public function store(Request $request)
    {
        // Logic to store a new post
    }
    public function show($id)
    {
        // Logic to display a single post
    }
    public function edit($id)
    {
        // Logic to show the form for editing a post
    }
    public function update(Request $request, $id)
    {
        // Logic to update a post
    }
    public function destroy($id)
    {
        // Logic to delete a post
    }
}
