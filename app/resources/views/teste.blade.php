@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container py-3">
        <div class="carousel slide" data-bs-ride="carousel" id="ads">
            <div class="carousel-inner rounded-4 position-relative">
                <!-- Caption for Days of the Week -->
                <div class="carousel-caption-days position-absolute">
                    <div class="days">
                        <span class="day" data-day="0">S</span> <!-- Sunday -->
                        <span class="day" data-day="1">M</span> <!-- Monday -->
                        <span class="day" data-day="2">T</span> <!-- Tuesday -->
                        <span class="day" data-day="3">W</span> <!-- Wednesday -->
                        <span class="day" data-day="4">T</span> <!-- Thursday -->
                        <span class="day" data-day="5">F</span> <!-- Friday -->
                        <span class="day" data-day="6">S</span> <!-- Saturday -->
                    </div>
                </div>
                
                <!-- Carousel Items -->
                <div class="carousel-item active" data-day="0"> <!-- Sunday -->
                    <img src="https://picsum.photos/1280/420?random=1" alt="" class="d-block w-100">
                    <div class="caption">It's Sunday!</div>
                </div>
                <div class="carousel-item" data-day="1"> <!-- Monday -->
                    <img src="https://picsum.photos/1280/420?random=2" alt="" class="d-block w-100">
                    <div class="caption">It's Monday!</div>
                </div>
                <div class="carousel-item" data-day="2"> <!-- Tuesday -->
                    <img src="https://picsum.photos/1280/420?random=3" alt="" class="d-block w-100">
                    <div class="caption">Day Training!</div>
                </div>
                <div class="carousel-item" data-day="3"> <!-- Wednesday -->
                    <img src="https://picsum.photos/1280/420?random=4" alt="" class="d-block w-100">
                    <div class="caption">Day Training!</div>
                </div>
                <div class="carousel-item" data-day="4"> <!-- Thursday -->
                    <img src="https://picsum.photos/1280/420?random=5" alt="" class="d-block w-100">
                    <div class="caption">Day Training!</div>
                </div>
                <div class="carousel-item" data-day="5"> <!-- Friday -->
                    <img src="https://picsum.photos/1280/420?random=6" alt="" class="d-block w-100">
                    <div class="caption">Day Training!</div>
                </div>
                <div class="carousel-item" data-day="6"> <!-- Saturday -->
                    <img src="https://picsum.photos/1280/420?random=7" alt="" class="d-block w-100">
                    <div class="caption">Day Training!</div>
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
            var captions = document.querySelectorAll('.carousel-item .caption');
        
            days[0].classList.add('active');
            captions[0].style.display = 'block';
        
            var currentDay = new Date().getDay();
        
            carousel.addEventListener('slide.bs.carousel', function(event) {
                days.forEach(day => day.classList.remove('active'));
                captions.forEach(caption => caption.style.display = 'none');
                days[event.to].classList.add('active');
        
                if (event.to === currentDay) {
                    captions[event.to].style.display = 'block';
                }
            });
        });
    </script>
        
@endsection 

</body>
</html>