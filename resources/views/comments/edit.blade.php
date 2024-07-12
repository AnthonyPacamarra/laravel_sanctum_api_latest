<!DOCTYPE html>
<html>
<head>
    <title>Edit Comment</title>
</head>
<body>
    <h1>Edit Comment</h1>
    <form action="{{ url('/comments', $comment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="body">Comment:</label>
            <textarea id="body" name="body" required>{{ $comment->body }}</textarea>
        </div>
        <button type="submit">Update Comment</button>
    </form>
</body>
</html>
