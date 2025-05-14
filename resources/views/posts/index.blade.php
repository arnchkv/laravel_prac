<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <p>Author: {{ $post->user->name }}</p>
                <p>Published on: {{ $post->created_at->format('Y-m-d') }}</p>
            </li>
        @endforeach
    </ul>
</body>

</html>