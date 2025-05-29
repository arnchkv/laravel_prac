@extends("layouts.app")
@section("title", "Posts")

@section("content")
    <div class="w-full max-w-2xl mx-auto mt-8">
        <div class="flex justify-end gap-2 mb-6">
            <form action="{{ url('logout') }}" method="POST">
                @csrf
                @method('DELETE')
                <button
                    class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 transition"
                    type="submit">Logout</button>
            </form>
            <form action="{{ url(route('posts.create')) }}" method="get">
                <button
                    class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 transition"
                    type="submit">Create</button>
            </form>
        </div>
        <ul class="space-y-6">
            @foreach ($posts as $post)
                <li class="bg-white rounded-lg shadow p-6">
                    <p class="text-gray-800 text-lg mb-2">{{ $post->content }}</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span class="mr-4">Author: <span
                                class="font-semibold text-gray-700">{{ $post->user->name }}</span></span>
                        <span>Published: {{ $post->created_at->format('Y-m-d') }}</span>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ url('/posts/' . $post->id . '/edit') }}"
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 transition">Edit</a>
                        <form action="{{ url('/posts/' . $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 transition">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="flex items-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection