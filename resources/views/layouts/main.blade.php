<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Member Management System')</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MEMBER MANAGEMENT SYSTEM</a>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="d-flex">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px; height: 100vh;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                    <span class="fs-4">HOME</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/members" class="nav-link text-dark">MEMBERS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">MEMBERS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">MEMBERS</a>
                    </li>
                </ul>
            </div>
            <div class="ms-4 mt-4 w-100">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
