<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('teste');
})->name('teste');

// routes/web.php
Route::get('/messages', function () {
    return view('messages');
})->name('messages');

Route::get('/mais', function () {
    return view('mais');
})->name('mais');

Route::get('/workout', function () {
    return view('teste');
})->name('teste');

Route::get('/feed', function () {
    return view('feed');
})->name('feed');

Route::get('/treino/selecionardia', function () {
    return view('selecionardia');
})->name('selecionardia');