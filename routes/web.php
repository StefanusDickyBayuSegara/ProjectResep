<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/standby', function () {
    return view('Standby');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/login', function () {
    return view('Login');
})->name('login');

Route::get('/singup', function () {
    return view('Singup');
})->name('singup');

Route::post('/register', [AuthController::class, 'register'])->name('register.post');

