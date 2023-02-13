<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// registro de usuario
Route::get('/crear-cuenta', [RegisterController::class, 'index'])->name('register');
Route::post('/crear-cuenta', [RegisterController::class, 'store']); // al no darle un name a esta ruta, toma el name de la ruta de arriba


Route::get('/login', function () {
    return view('auth.login');
});
