@extends("layouts.app")
@section("title", "Create")

@section("content")
    <div class="container mx-auto max-w-lg p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-6">Edit Post</h2>
        <form action="{{ url('/posts/' . $post->id) }}" method="post" class="space-y-6">
            @method('PUT')
            @csrf
            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-700 mb-1">User</label>
                <select name="user_id" id="user_id" class="w-full border border-gray-300 rounded px-3 py-2">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" @if ($post->user_id == $user->id) selected @endif>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                <textarea name="content" id="content" required class="w-full border border-gray-300 rounded px-3 py-2" rows="5">{{ trim($post->content) }}</textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 font-bold">Update Post</button>
            <a href="{{ url('posts') }}"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-center">Back</a>
        </form>
    </div>
@endsection