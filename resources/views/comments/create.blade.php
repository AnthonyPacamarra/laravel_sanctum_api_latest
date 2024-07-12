<!DOCTYPE html>
<html>
<head>
    <title>Create Comment</title>
</head>
<body>
    <h1>Create Comment</h1>
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
