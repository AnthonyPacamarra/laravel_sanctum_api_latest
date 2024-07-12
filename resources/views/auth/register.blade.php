@extends('mainLayout')

@section('title', 'Register')

@section('auth-content')
<div>
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Register</button>
            <a href="{{ route('login') }}">
                <button type="button">Login</button>
            </a>
        </div>
    </form>
</div>
@endsection