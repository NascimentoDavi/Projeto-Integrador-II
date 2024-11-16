{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- CSS from Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    {{-- Custom CSS File --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Include Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <title>@yield('title', 'Teste')</title>
</head>
<body>

    <style>
        #content-placeholder {
        opacity: 0;
        transition: opacity 0.15s ease-in-out;
        }
        .show {
        opacity: 1;
        }
        body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        background-color: #f1f1f1;
        }
        nav {
            background-color: rgb(235, 234, 234);
            border-bottom: 2px solid rgb(124, 3, 3);
        }
        .nav-item {
        text-align: center;
        }
        .nav-item i {
        display: block;
        font-size: 20px; 
        margin-bottom: 4px;
        }
        .nav-link.active i {
        color: rgb(124, 3, 3);
        }
        .nav-link.active {
        color: rgb(124, 3, 3) !important;
        }
        .nav-link i {
        color: rgb(124, 3, 3);
        }
        .nav-link {
        color: rgb(124, 3, 3);
        }
        .nav-link:hover {
            color: rgb(224, 5, 5)
        }
        .nav-link {
        border: none !important;
        }
        .navbar-border {
        border-top: 1px solid rgb(124, 3, 3);
        }
        ul {
        background-color: rgb(235, 234, 234);
        }
        .active-link {
            font-weight: bold;
            font-size: 107%;
        }
        .active-icon {
            
        }
        .icon-grow {
            transition: font-size 1s;
        }
        .icon-grow:hover {
            font-size: 28px;
        }
        .btn {
            background-color: rgb(124, 3, 3);
            color: white;
        }
    </style>

    <nav class="navbar">
        <div class="container d-flex align-items-center py-2">
            <img src="{{ asset('images/profile_photo.png') }}" alt="Profile Photo" class="rounded-circle me-2" width="40" height="40">
            <a href="" class="navbar-brand">Davi Rodrigues</a>
    
            <!-- Notification Icon -->
            <a href="#" class="ms-auto position-relative me-3">
                <i class="fas fa-bell fa-lg"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span> <!-- Example count -->
            </a>
    
            <!-- Streak Fire Icon -->
            <a href="#" class="position-relative">
                <i class="fas fa-fire fa-lg"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">5</span> <!-- Example streak days -->
            </a>
        </div>
    </nav>


    {{-- footer --}}
    <div class="content position-absolute bottom-0">
        <footer>
            <ul class="nav nav-tabs justify-content-center fixed-bottom navbar-border-5 pt-2" id="menuTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('workout') ? 'active-link' : '' }}" id="home-tab" href="{{ route('workout') }}">
                        <i class="fa-solid fa-dumbbell icon-grow"></i>
                        Workout
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('feed') ? 'active-link' : '' }}" id="about-tab" href="{{ route('feed') }}">
                        <i class="fa-solid fa-camera icon-grow"></i>
                        Feed
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('messages') ? 'active-link' : '' }}" id="services-tab" href="{{ route('messages') }}">
                        <i class="fa-solid fa-comment icon-grow"></i>
                        Messages
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('mais') ? 'active-link' : '' }}" id="contact-tab" href="{{ route('mais') }}">
                        <i class="fas fa-cog icon-grow"></i>
                        Mais...
                    </a>
                </li>
            </ul>
        </footer>
        <br>        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8218441c5c.js" crossorigin="anonymous"></script>
    
    <!-- Conteúdo da View -->
    <div class="container mt-4">
        @yield('content')
        <div class="bg-dark my-5 py-1"></div>
    </div>

    {{-- JavaScript from Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>



{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
            </main>
        </div>
    </body>
</html> --}}
