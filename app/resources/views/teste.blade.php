<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Teste</title>
</head>
<body>

    <nav class="navbar bg-light">
        <div class="container d-flex align-items-center">
            <img src="{{ asset('images/profile_photo.png') }}" alt="Profile Photo" class="rounded-circle me-2" width="40" height="40">
            <a href="" class="navbar-brand">Profile Name</a>
    
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
    
    
    {{-- <div class="d-flex justify-content-center gap-4 mt-4 bg-secondary px-2 py-1 border rounded-4" style="height: 50px;">
        <div class="bg-white px-3 rounded-3">1º</div>
        <div class="bg-white px-3 rounded-3">2º</div>
        <div class="bg-white px-3 rounded-3">3º</div>
        <div class="bg-white px-3 rounded-3">4º</div>
        <div class="bg-white px-3 rounded-3">5º</div>
        <div class="bg-white px-3 rounded-3">6º</div>
        <div class="bg-white px-3 rounded-3">7º</div>
    </div>
     --}}
    
     <div class="container py-3">
        <div class="carousel slide" data-bs-ride="carousel" id="ads">
            <div class="carousel-inner rounded-4 position-relative">

                <!-- Caption for Days of the Week -->
                <div class="carousel-caption-days position-absolute">
                    <div class="days">
                        <span class="day">M</span>
                        <span class="day">S</span>
                        <span class="day">T</span>
                        <span class="day">W</span>
                        <span class="day">T</span>
                        <span class="day">F</span>
                        <span class="day">S</span>
                    </div>
                </div>
            
                <!-- Carousel Items -->
                <div class="carousel-item active">
                    <img src="https://picsum.photos/1280/420?random=1" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1280/420?random=2" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1280/420?random=3" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1280/420?random=4" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1280/420?random=5" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1280/420?random=6" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1280/420?random=7" alt="" class="d-block w-100">
                </div>
            
                <!-- Carousel Buttons -->
                <div class="carousel-buttons">
                    <button class="carousel-control-prev" data-bs-target="#ads" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    
                    <button class="carousel-control-next" data-bs-target="#ads" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button> 
                </div>
            
            </div>
                   
            
        </div>
    </div>

    <script>

document.addEventListener('DOMContentLoaded', function() {
    var carousel = document.querySelector('#ads');
    var days = document.querySelectorAll('.carousel-caption-days .day');
    
    // Initialize the first day as active
    days[0].classList.add('active');

    // Add event listener for carousel slide event
    carousel.addEventListener('slide.bs.carousel', function(event) {
        // Remove active class from all days
        days.forEach(day => day.classList.remove('active'));
        
        // Add active class to the day corresponding to the active slide
        days[event.to].classList.add('active');
    });
});


    </script>

</body>
</html>