@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <style>
        body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        background-color: #f1f1f1;
        }
        .chat-list {
        max-width: 600px;
        margin: 20px auto;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow-y: auto;
        height: 80vh;
        padding: 10px; 
        }
        .chat-item {
        padding: 15px;
        border-bottom: 1px solid #eaeaea;
        cursor: pointer;
        display: flex;
        align-items: center;
        }
        .chat-item:hover {
        background-color: #f1f1f1;
        }
        .chat-item:last-child {
        border-bottom: none;
        }
        .chat-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #007bff;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2em;
        margin-right: 10px;
        }
        .chat-details {
        flex: 1;
        }
        .chat-name {
        font-weight: bold;
        font-size: 1.1em;
        }
        .chat-message {
        color: #555;
        margin-top: 5px;
        }
        .chat-time {
        font-size: 0.8em;
        color: #aaa;
        margin-left: auto;
        text-align: right; 
        }
        .badge-blue {
        background-color: #007bff; 
        color: white; 
        border-radius: 50%;
        width: 20px; 
        height: 20px;
        display: flex;
        align-items: center; 
        justify-content: center; 
        font-size: 0.9em; 
        margin-left: 5px; 
        margin-top: 5px; 
        }
    </style>



    <div class="tab-pane fade show active" id="services" role="tabpanel" aria-labelledby="services-tab">
        <h3 class="text-center">Your Chats</h3>
    </div>

    <div class="chat-list">
        <div class="chat-item" onclick="loadChat('chat1.html')">
            <div class="chat-avatar">A</div>
            <div class="chat-details">
                <div class="chat-name">Alice</div>
                <div class="chat-message">Oi, tudo bem?</div>
            </div>
            <div class="chat-time">
                10:30
                <span class="badge badge-blue">2</span> 
            </div>
        </div>
        
        <div class="chat-item" onclick="loadChat('chat2.html')">
            <div class="chat-avatar">B</div>
            <div class="chat-details">
                <div class="chat-name">Bruno</div>
                <div class="chat-message">Vamos nos encontrar mais tarde?</div>
            </div>
            <div class="chat-time">
                09:15
                <span class="badge badge-blue">1</span>
            </div>
        </div>
        
        <div class="chat-item" onclick="loadChat('chat3.html')">
            <div class="chat-avatar">C</div>
            <div class="chat-details">
                <div class="chat-name">Carla</div>
                <div class="chat-message">Você viu o último episódio?</div>
            </div>
            <div class="chat-time">08:45</div>
        </div>
        
        <div class="chat-item" onclick="loadChat('chat4.html')">
            <div class="chat-avatar">D</div>
            <div class="chat-details">
                <div class="chat-name">Diego</div>
                <div class="chat-message">Tem novidades sobre o projeto?</div>
            </div>
            <div class="chat-time">08:00</div>
        </div>
        
        <div class="chat-item" onclick="loadChat('chat5.html')">
            <div class="chat-avatar">E</div>
            <div class="chat-details">
                <div class="chat-name">Eduardo</div>
                <div class="chat-message">Vamos fazer algo no fim de semana?</div>
            </div>
            <div class="chat-time">
                07:30
                <span class="badge badge-blue">3</span>
            </div>
        </div>

        <!-- Novos Chats -->
        <div class="chat-item" onclick="loadChat('chat6.html')">
            <div class="chat-avatar">F</div>
            <div class="chat-details">
                <div class="chat-name">Fernanda</div>
                <div class="chat-message">Você recebeu o arquivo?</div>
            </div>
            <div class="chat-time">
                06:50
                <span class="badge badge-blue">5</span>
            </div>
        </div>

        <div class="chat-item" onclick="loadChat('chat7.html')">
            <div class="chat-avatar">G</div>
            <div class="chat-details">
                <div class="chat-name">Gabriel</div>
                <div class="chat-message">O que você achou do evento?</div>
            </div>
            <div class="chat-time">
                06:30
                <span class="badge badge-blue">1</span>
            </div>
        </div>

        <div class="chat-item" onclick="loadChat('chat8.html')">
            <div class="chat-avatar">H</div>
            <div class="chat-details">
                <div class="chat-name">Hugo</div>
                <div class="chat-message">Precisamos conversar sobre o projeto.</div>
            </div>
            <div class="chat-time">05:45</div>
        </div>
        <br>
    </div>

    <script>
        function loadChat(chatFile) {
            console.log(`Carregando o chat de ${chatFile}`);
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection




</html>
