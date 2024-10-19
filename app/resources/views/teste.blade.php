@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <style>
        .card img {
            height: 100px;
        }
        .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

    </style>

    <div class="container pb-3">
        <div class="carousel slide" data-bs-ride="carousel" id="ads">
            <div class="carousel-inner rounded-4 position-relative mb-3">
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

        <!-- Botão flutuante -->
        <div class="floating-btn" id="floatingBtn">+</div>

        <!-- Opções do botão flutuante -->
        <div class="floating-options" id="floatingOptions">
            <button class="btn btn-primary" onclick="montarTreino()">Montar Treino</button>
            <button class="btn btn-primary" onclick="gerarRelatorio()">Gerar Relatório</button>
            <button class="btn btn-primary" onclick="adicionarMedidas()">Adicionar Medidas</button>
        </div>

        <!-- Overlay escuro -->
        <div class="overlay" id="overlay"></div>

        <hr>

        {{-- Select training section --}}

        <div class="body-personal-information my-2 d-flex justify-content-center flex-column gap-4">
            {{-- Last Exercise --}}
            <div class="d-flex justify-content-center flex-column">

                <h4 class="my-4">
                    <i class="bi bi-clock"></i>
                    Último Exercício
                </h4>
                
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-12"> <!-- Agora a imagem ocupa a largura total -->
                            <img src="{{ asset('images/treino_costas.svg') }}" class="img-fluid w-100 rounded-start" alt="..." style="object-fit: cover;">
                        </div>
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title">Biceps Intenso</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, beatae.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            {{-- Meu Peso --}}
            <div class="d-flex justify-content-center flex-column">
                <h4>
                    <i class="fa-solid fa-weight-hanging"></i>
                    Peso atual: 
                </h4>

                <!-- Card container for the weight graph -->
                <div class="card mt-3">
                    <div class="card-body">
                        <!-- Canvas for the weight graph -->
                        <canvas id="weightChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            {{-- Gerar Relatorios --}}
            <button class="btn btn-primary">Gerar Relatorio</button>

            {{-- Minhas Medidas --}}
            <button class="btn btn-primary">Minhas Medidas</button>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Setup the chart data
            const ctx = document.getElementById('weightChart').getContext('2d');
            const weightChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'], // X-axis labels (time intervals)
                    datasets: [{
                        label: 'Peso (kg)',
                        data: [75, 74, 73.5, 73, 72.5], // Weight data points
                        borderColor: 'rgba(75, 192, 192, 1)', // Line color
                        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Background color under the line
                        fill: true,
                        tension: 0.4, // Curves the line
                        pointRadius: 5, // Size of data points
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: false, // The Y-axis starts from the minimum value
                            title: {
                                display: true,
                                text: 'Peso (kg)'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Semanas'
                            }
                        }
                    }
                }
            });
        </script>

        <div class="modal fade" id="treinos-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">
                
                <div class="modal-content p-2">
                    
                    <div class="modal-header d-flex flex-row justify-content-between">
                        <h5 class="modal-title" id="exampleModalLabel">Selecione o Treino</h5>

                        <button type="button" class="" data-dismiss="modal" aria-label="Close">
                            <i class="bi bi-x-circle"></i>
                        </button>

                    </div>

                    <div class="modal-body d-flex flex-column gap-3">

                        <div class="row">
                            
                            <div class="col-6 d-flex justify-content-center">
                                
                                <div class="card w-100">
                                    
                                    <img src="{{ asset('images/treino_braco.svg') }}" class="card-img-top w-100" alt="..." style="object-fit: cover;"> 

                                    <div class="card-body">
                                        <h5 class="card-title">Braço</h5>
                                        <p class="card-text">Treino de Braços</p>
                                        <a href="{{ route('selecionardia') }}" class="btn btn-primary">Adicionar</a>
                                    </div>

                                </div>
                                
                            </div>
                    
                            <div class="col-6 d-flex justify-content-center">

                                <div class="card w-100">

                                    <img src="{{ asset('images/treino_perna.svg') }}" class="card-img-top w-100" alt="..." style="object-fit: cover;"> <!-- Use w-100 e object-fit: cover -->

                                    <div class="card-body">
                                        <h5 class="card-title">Perna</h5>
                                        <p class="card-text">Treino de Perna</p>
                                        <a href="{{ route('selecionardia') }}" class="btn btn-primary">Adicionar</a>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row">
                            
                            <div class="col-6 d-flex justify-content-center">
                                
                                <div class="card w-100">
                                    
                                    <img src="{{ asset('images/treino_braco.svg') }}" class="card-img-top w-100" alt="..." style="object-fit: cover;"> 

                                    <div class="card-body">
                                        <h5 class="card-title">Braço</h5>
                                        <p class="card-text">Treino de Braços</p>
                                        <a href="{{ route('selecionardia') }}" class="btn btn-primary">Adicionar</a>
                                    </div>

                                </div>
                                
                            </div>
                    
                            <div class="col-6 d-flex justify-content-center">

                                <div class="card w-100">

                                    <img src="{{ asset('images/treino_perna.svg') }}" class="card-img-top w-100" alt="..." style="object-fit: cover;"> <!-- Use w-100 e object-fit: cover -->

                                    <div class="card-body">
                                        <h5 class="card-title">Perna</h5>
                                        <p class="card-text">Treino de Perna</p>
                                        <a href="{{ route('selecionardia') }}" class="btn btn-primary">Adicionar</a>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row">
                            
                            <div class="col-6 d-flex justify-content-center">
                                
                                <div class="card w-100">
                                    
                                    <img src="{{ asset('images/treino_braco.svg') }}" class="card-img-top w-100" alt="..." style="object-fit: cover;"> 

                                    <div class="card-body">
                                        <h5 class="card-title">Braço</h5>
                                        <p class="card-text">Treino de Braços</p>
                                        <a href="{{ route('selecionardia') }}" class="btn btn-primary">Adicionar</a>
                                    </div>

                                </div>
                                
                            </div>
                    
                            <div class="col-6 d-flex justify-content-center">

                                <div class="card w-100">

                                    <img src="{{ asset('images/treino_perna.svg') }}" class="card-img-top w-100" alt="..." style="object-fit: cover;"> <!-- Use w-100 e object-fit: cover -->

                                    <div class="card-body">
                                        <h5 class="card-title">Perna</h5>
                                        <p class="card-text">Treino de Perna</p>
                                        <a href="{{ route('selecionardia') }}" class="btn btn-primary">Adicionar</a>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row">
                            
                            <div class="col-6 d-flex justify-content-center">
                                
                                <div class="card w-100">
                                    
                                    <img src="{{ asset('images/treino_braco.svg') }}" class="card-img-top w-100" alt="..." style="object-fit: cover;"> 

                                    <div class="card-body">
                                        <h5 class="card-title">Braço</h5>
                                        <p class="card-text">Treino de Braços</p>
                                        <a href="{{ route('selecionardia') }}" class="btn btn-primary">Adicionar</a>
                                    </div>

                                </div>
                                
                            </div>
                    
                            <div class="col-6 d-flex justify-content-center">

                                <div class="card w-100">

                                    <img src="{{ asset('images/treino_perna.svg') }}" class="card-img-top w-100" alt="..." style="object-fit: cover;"> <!-- Use w-100 e object-fit: cover -->

                                    <div class="card-body">
                                        <h5 class="card-title">Perna</h5>
                                        <p class="card-text">Treino de Perna</p>
                                        <a href="{{ route('selecionardia') }}" class="btn btn-primary">Adicionar</a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                    
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

        document.getElementById('floatingBtn').addEventListener('click', function() {
    const options = document.getElementById('floatingOptions');
    const overlay = document.getElementById('overlay');

    // Alterna a visibilidade das opções e do overlay
    if (options.style.display === 'none' || options.style.display === '') {
        options.style.display = 'flex';
        overlay.style.display = 'block';
    } else {
        options.style.display = 'none';
        overlay.style.display = 'none';
    }
});

// Funções para os botões
function montarTreino() {
    // Lógica para montar treino
    console.log("Montar Treino");
    closeOptions();
}

function gerarRelatorio() {
    // Lógica para gerar relatório
    console.log("Gerar Relatório");
    closeOptions();
}

function adicionarMedidas() {
    // Lógica para adicionar medidas
    console.log("Adicionar Medidas");
    closeOptions();
}

function closeOptions() {
    document.getElementById('floatingOptions').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

    </script>
        
@endsection 

</body>
</html>