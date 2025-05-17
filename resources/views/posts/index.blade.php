<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    <form action="{{ url('logout') }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Logout</button>
    </form>
    <form action="{{ url(route('posts.create')) }}" method="get">
        <button type="submit">Create</button>
    </form>
    <ul>
        @foreach ($posts as $post)
            <li>
                <p>{{ $post->content }}</p>
                <p>Author: {{ $post->user->name }}</p>
                <p>Published on: {{ $post->created_at->format('Y-m-d') }}</p>
                <a href="{{ url('/posts/'.$post->id.'/edit') }}">Edit</a>
                <form action="{{ url('/posts/'.$post->id) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>

</html>