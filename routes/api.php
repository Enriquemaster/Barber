<?php

use App\Http\Controllers\ControllerProducts;
use App\Http\Controllers\ControllerServices;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CitasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/productos', [ControllerProducts::class, 'obtenerProductos']);
Route::get('/servicios', [ControllerServices::class, 'obtenerServicios']);
Route::get('/detalle/{id}', [CitasController::class, 'detalle']);
Route::get('/listado', [CitasController::class, 'listado']);


Route::post('/login', [AuthController::class, 'login']);
Route::post('/registrar', [AuthController::class, 'registrar']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth:sanctum');
