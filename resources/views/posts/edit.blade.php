<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>
    <form action="{{ url('/posts/' . $post->id) }}" method="post">
        @method('PUT')
        @csrf
        <div>
            <label for="user_id">User ID</label>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" @if ($post->user_id == $user->id) selected @endif>{{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required>
                {{ $post->content }}
            </textarea>
        </div>
        <button type="submit">Update Post</button>
    </form>
</body>

</html>