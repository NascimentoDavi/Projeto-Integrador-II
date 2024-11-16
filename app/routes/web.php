<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return redirect()->route('login');
})->name('login-page');

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// routes/web.php
Route::get('/messages', function () {
    return view('messages');
})->name('messages');

Route::get('/mais', function () {
    return view('mais');
})->name('mais');

Route::get('/workout', function () {
    return view('teste');
})->name('workout');

Route::get('/feed', function () {
    return view('feed');
})->name('feed');

Route::get('/treino/selecionardia', function () {
    return view('selecionardia');
})->name('selecionardia');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';