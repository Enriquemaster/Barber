<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProducts;
use App\Http\Controllers\ControllerServices;




//Productos
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

Route::get('/accionesProductos', [ControllerProducts::class, 'acciones'])->name('accionesProductos');
Route::get('/productos', [ControllerProducts::class, 'buscarProductos'])->name('productos');
Route::get('/producto/{id}/actualizar', [ControllerProducts::class, 'mostrarFormularioActualizar'])->name('productos.actualizar.formulario');
Route::put('/producto/{id}/actualizar', [ControllerProducts::class, 'actualizar'])->name('productos.actualizar');


//Servicios
Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/accionesServicios', function () {
    return view('accionesServicios');
});

Route::get('/agregarServicios', function () {
    return view('agregarServicios');
});

Route::get('/accionesServicios', [ControllerServices::class, 'acciones'])->name('accionesServicios');
Route::post('/registrar-servicio', [ControllerServices::class, 'registrarServicio'])->name('registrar-servicio');
Route::get('/servicio/{id}/actualizar', [ControllerServices::class, 'mostrarFormularioActualizar'])->name('servicio.actualizar.formulario');
Route::put('/servicio/{id}/actualizar', [ControllerServices::class, 'actualizar'])->name('servicios.actualizar');
Route::get('/servicios', [ControllerServices::class, 'buscarServicios'])->name('servicios');



Route::get('/conocenos', function () {
    return view('conocenos');
});

Route::get('/tiposmembresia', function () {
    return view('tiposmembresia');
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

Route::get('/retosClientes', [\App\Http\Controllers\ChallengeController::class, 'retosClientes'])->name('retos.clientes');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard_admin', function () {
        return view('dashboard_admin');
    })->name('dashboard_admin');
});

Route::get('/retos/{id}/recompensa', [\App\Http\Controllers\ChallengeController::class, 'getRecompensa']);

Route::get('image/{id}', [\App\Http\Controllers\ImagenController::class, 'show'])->name('image.show');
Route::view('/agregarRetos', 'agregarRetos')->name( 'agregarRetos');
//Route::get('/retos/{id}/editar', \App\Livewire\UpdateChallenge::class)->name('retos.editar');
//Route::get('/retos/{id}', [\App\Http\Controllers\ChallengeController::class, 'show'])->name('agregarRetos');

