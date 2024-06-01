<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProducts;
/*
Rutas Clientes
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/agregarProductos', function () {
    return view('agregarProductos');
});

Route::get('/actualizarProductos', function () {
    return view('actualizarProductos');
});

Route::get('/accionesProductos', function () {
    return view('accionesProductos');
});

Route::post('/registrar-producto', [ControllerProducts::class, 'registrarProducto'])->name('registrar-producto');
Route::get('/productos', [ControllerProducts::class, 'mostrarProductos'])->name('productos');
Route::get('/accionesProductos', [ControllerProducts::class, 'acciones'])->name('accionesProductos');
Route::get('/productos', [ControllerProducts::class, 'buscarProductos'])->name('productos');

Route::get('/producto/{id}/actualizar', [ControllerProducts::class, 'mostrarFormularioActualizar'])->name('productos.actualizar.formulario');
Route::put('/producto/{id}/actualizar', [ControllerProducts::class, 'actualizar'])->name('productos.actualizar');


Route::get('/conocenos', function () {
    return view('conocenos');
});

Route::get('/validacion', function () {
    return view('validacion');
});
Route::get('/Confirmacion', function () {
    return view('Confirmacion');
});

Route::get('/agendar', [citascontroller::class, 'create'])
    ->name('agendar');


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


Route::get('/retos/{id}', [\App\Http\Controllers\ChallengeController::class, 'show'])->name('agregarRetos');

