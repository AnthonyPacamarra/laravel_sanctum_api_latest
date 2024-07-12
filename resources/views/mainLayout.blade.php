<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'My Application')</title>
</head>

<body>
    <!-- <header>
        <h1>My Application</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Register</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </header> -->

    <div class="row">
        <div class="col">
                @yield('auth-content')
        </div>
    </div>

    <footer>
        <p>&copy; 2024 My Application. All rights reserved. wa paka na authorized</p>
    </footer>
</body>

</html>