<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mostrar-fecha', function () {
    return view('mostrar-fecha');
});
