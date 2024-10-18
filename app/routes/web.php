<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('teste');
});


Route::get('/messages', function () {
    return view('messages');
});

Route::get('/mais', function () {
    return view('mais');
});