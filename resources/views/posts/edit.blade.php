<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="{{ url('/posts', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div>
            <label for="body">Body:</label>
            <textarea id="body" name="body" required>{{ $post->body }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
