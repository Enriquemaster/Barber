<?php

use App\Http\Controllers\ControllerProducts;
use App\Http\Controllers\CitasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/productos', [ControllerProducts::class, 'obtenerProductos']);
Route::get('/detalle/{id}', [CitasController::class, 'detalle']);
Route::get('/listado', [CitasController::class, 'listado']);
