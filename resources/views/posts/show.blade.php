<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>by {{ $post->user->name }}</p>
    <p>{{ $post->body }}</p>
    <a href="{{ url('/posts', [$post->id, 'edit']) }}">Edit</a>
    <form action="{{ url('/posts', $post->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
