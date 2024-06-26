<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProducts;
use App\Http\Controllers\ControllerServices;
use App\Http\Controllers\controllerCodes;
use App\Http\Controllers\controllerMembershipOwner;
use App\Http\Controllers\ControllerProduct;


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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrarMembresia', function () {
    return view('registrarMembresia');
});


Route::get('/tuMembresia', function () {
    return view('tuMembresia');

});

Route::get('/falloMembresia', function () {
    return view('falloMembresia');
})->name('falloMembresia');




Route::post('/accionesMembresias', [controllerCodes::class, 'generarMembresia'])->name('accionesMembresias');
Route::post('/registrarMembresia', [controllerMembershipOwner::class, 'verificarMembresia'])->name('registrarMembresia');
Route::get('/accionesMembresias', [controllerMembershipOwner::class, 'obtenerDatosMembresias'])->name('accionesMembresias');
Route::get('/registrarMembresia', [controllerMembershipOwner::class, 'mostrarDatos1'])->name('tuMembresia');
Route::get('/retosClientes', [\App\Http\Controllers\ChallengeController::class, 'retosClientes'])->name('retos.clientes');
Route::get('/promocionesClientes', [\App\Http\Controllers\PromotionController::class, 'promocionesClientes'])->name('promotions.clientes');








Route::get('/dashboardJuegos', function () {
    return view('dashboardJuegos');
})->name('dashboardJuegos');

Route::get('/verProductos', function () {
    return view('verProductos');
})->name('verProductos');


Route::get('/registrarProductos', function () {
    return view('registrarProductos');
})->name('registrarProductos');

Route::get('/accionesProductoss', function () {
    return view('accionesProductoss');
})->name('accionesProductoss');

Route::get('/actualizarProducto', function () {
    return view('actualizarProducto');
})->name('actualizarProducto');




Route::get('/accionesProductoss', [ControllerProduct::class, 'acciones'])->name('accionesProductoss');
Route::get('/verProductos', [ControllerProduct::class, 'acciones1'])->name('verProductos');
Route::post('/registrarProductos', [ControllerProduct::class, 'registrarProducto'])->name('registrarProductos');
Route::put('/producto/{id}/actualizar', [ControllerProduct::class, 'actualizar'])->name('productos.actualizar');
Route::get('/producto/{id}/actualizar', [ControllerProduct::class, 'mostrarFormularioActualizar'])->name('productos.actualizar.formulario');
Route::delete('/productos/{id}', [ControllerProduct::class, 'eliminarProducto'])->name('productos.eliminar');




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
Route::get('promotion/image/{id}', [\App\Http\Controllers\ImagenPromoController::class, 'show'])->name('promotion.image.show');

Route::view('/agendar', 'agendar')->name( 'agendar');

Route::view('/agregarPromociones', 'agregarPromociones')->name( 'agregarPromociones');
Route::view('/agregarRetos', 'agregarRetos')->name( 'agregarRetos');


