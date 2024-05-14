<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/retos', function () {
    return view('retos');
    name ('retos');
});

Route::get('/tiposmembresia', function () {
    return view('tiposmembresia');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
