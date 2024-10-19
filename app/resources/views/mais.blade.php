@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container">

        <ul class="list-group">
            
            <li class="list-group-item disabled" aria-disabled="true">
                <i class="fa-solid fa-crown"></i>
                |
                Assinatura
            </li>

            <li class="list-group-item">
                <i class="fa-solid fa-file-pdf"></i>
            |
                Relatórios
            </li>
            
            <li class="list-group-item">
                <i class="fa-solid fa-ruler"></i>
                |
                Medidas
            </li>
            
            <li class="list-group-item">
                <i class="fa-solid fa-user"></i>
                |
                Meu Perfil
            </li>
            
            <li class="list-group-item">
                <i class="bi bi-star-fill"></i>
                |
                Avaliar App
            </li>

            <li class="list-group-item">
                <i class="fa-solid fa-envelope"></i>
                |
                Escrever ao Suporte
            </li>

            <li class="list-group-item">
                <i class="fa-solid fa-lock"></i>
                |
                Alterar Senha
            </li>

            <li class="list-group-item">
                <i class="fa-solid fa-door-open"></i>
                |
                Sair
            </li>
            
          </ul>

          <div class="app-data my-5 py-5">
            <p>App version 1.0.1</p>
            <p>There aren't updates available</p>
          </div>
          
    </div>

@endsection