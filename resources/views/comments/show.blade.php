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
    <h2>Comments</h2>
    <ul>
        @foreach ($post->comments as $comment)
            <li>
                {{ $comment->body }} by {{ $comment->user->name }}
                @if (auth()->id() == $comment->user_id)
                    <a href="{{ url('/comments', [$comment->id, 'edit']) }}">Edit</a>
                    <form action="{{ url('/comments', $comment->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
    <h3>Add a Comment</h3>
    <form action="{{ url('/comments') }}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div>
            <label for="body">Comment:</label>
            <textarea id="body" name="body" required></textarea>
        </div>
        <button type="submit">Post Comment</button>
    </form>
</body>
</html>
