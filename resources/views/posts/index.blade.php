<!DOCTYPE html>
<html>

<head>
    <title>All Posts</title>
</head>

<body>
    <h1>All Posts</h1>
    <a href="{{ url('/posts/create') }}">Create New Post</a>
    @if(Auth::check())
        {{ Auth::user()->user->name }}
        <span class="fs-6" style="font-weight: bold;">
            User
        </span>
        @include('slugs.logout')
    @endif
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a>
                by {{ $post->user->name }}
                <form action="{{ url('/posts', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>

</html>