<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/standby', function () {
    return view('Standby');
});

Route::get('/Sing-up', function () {
    return view('Sing-up');
});