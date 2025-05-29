@extends("layouts.app")
@section("title", "Create")

@section("content")

    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md" action="{{ url('/posts') }}"
            method="post">
            @csrf
            <div class="mb-6">
                <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">User</label>
                <select name="user_id" id="user_id"
                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option value="" selected>Select</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
                <textarea name="content" id="content" rows="4"
                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your post here..."></textarea>
            </div>
            <div class="flex items-center gap-2">
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Create Post
                </button>
                <a href="{{ url('posts') }}"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-center">Back</a>
            </div>
        </form>
    </div>
@endsection