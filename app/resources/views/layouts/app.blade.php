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
        .nav-item {
        text-align: center;
        }
        .nav-item i {
        display: block;
        font-size: 20px; 
        margin-bottom: 4px;
        }
        .nav-link.active i {
        color: rgb(55, 123, 211);
        }
        .nav-link.active {
        color: rgb(55, 123, 211) !important;
        }
        .nav-link i {
        color: rgb(168, 168, 168);
        }
        .nav-link {
        color: rgb(168, 168, 168);
        }
        .nav-link {
        border: none !important; /* Remove a borda */
        }
        .navbar-border {
        border-top: 1px solid rgb(199, 199, 199); /* Ajuste a espessura e a cor conforme necessário */
        }
        ul {
        background-color: white;
        }

    </style>

    <nav class="navbar bg-light">
        <div class="container d-flex align-items-center">
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

    <div class="content">
        <footer>
            <ul class="nav nav-tabs justify-content-center fixed-bottom navbar-border" id="menuTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" href="#">
                        <i class="fa-solid fa-dumbbell"></i>
                        Workout
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-tab" href="#">
                        <i class="fa-solid fa-camera"></i>
                        Feed
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="services-tab" href="#">
                        <i class="fa-solid fa-comment"></i>
                        Messages
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" href="#">
                        <i class="fas fa-cog"></i>
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
    </div>

    {{-- JavaScript from Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
