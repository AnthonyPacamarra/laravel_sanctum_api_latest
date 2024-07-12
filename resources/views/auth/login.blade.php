@extends('mainLayout')

@section('title', 'Login')

@section('auth-content')
<div>
    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
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
            <button type="submit">Login</button>
            <a href="{{ route('register') }}">
                <button type="button">Register</button>
            </a>
        </div>
    </form>
</div>
@endsection