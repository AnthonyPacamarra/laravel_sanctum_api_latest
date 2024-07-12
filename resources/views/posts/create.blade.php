<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="{{ url('/posts') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="body">Body:</label>
            <textarea id="body" name="body" required></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>
