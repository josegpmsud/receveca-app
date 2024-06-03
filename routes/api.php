<?php

use App\Models\Contrato;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\UsoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(UsuarioController::class)->group(function(){
    Route::get('/usuarios', 'index');
    Route::get('/usuario/{id}', 'show');
    Route::post('/usuario', 'store');
    Route::put('/usuario/{id}', 'update');
    Route::delete('/usuario/{id}', 'destroy');
});

Route::controller(VehiculoController::class)->group(function(){
    Route::get('/vehiculos', 'index');
    Route::get('/vehiculo/{id}', 'show');
    Route::post('/vehiculo', 'store');
    Route::put('/vehiculo/{id}', 'update');
    Route::delete('/vehiculo/{id}', 'destroy');
});

Route::controller(ContratoController::class)->group(function(){
    Route::get('/contratos', 'index');
    Route::get('/contrato/{id}', 'show');
    Route::post('/contrato', 'store');
    Route::put('/contrato/{id}', 'update');
    Route::delete('/contrato/{id}', 'destroy');
});

Route::controller(ClienteController::class)->group(function(){
    Route::get('/clientes', 'index');
    Route::get('/cliente/{id}', 'show');
    Route::post('/cliente', 'store');
    Route::put('/cliente/{id}', 'update');
    Route::delete('/cliente/{id}', 'destroy');
});

Route::controller(PlanController::class)->group(function(){
    Route::get('/plans', 'index');
    Route::get('/plan/{id}', 'show');
    Route::post('/plan', 'store');
    Route::put('/plan/{id}', 'update');
    Route::delete('/plan/{id}', 'destroy');
});

Route::controller(RolController::class)->group(function(){
    Route::get('/rols', 'index');
    Route::get('/rol/{id}', 'show');
    Route::post('/rol', 'store');
    Route::put('/rol/{id}', 'update');
    Route::delete('/rol/{id}', 'destroy');
});

Route::controller(MarcaController::class)->group(function(){
    Route::get('/marcas', 'index');
    Route::get('/marca/{id}', 'show');
    Route::post('/marca', 'store');
    Route::put('/marca/{id}', 'update');
    Route::delete('/marca/{id}', 'destroy');
});

Route::controller(ClaseController::class)->group(function(){
    Route::get('/clases', 'index');
    Route::get('/clase/{id}', 'show');
    Route::post('/clase', 'store');
    Route::put('/clase/{id}', 'update');
    Route::delete('/clase/{id}', 'destroy');
});

Route::controller(ColorController::class)->group(function(){
    Route::get('/colors', 'index');
    Route::get('/color/{id}', 'show');
    Route::post('/color', 'store');
    Route::put('/color/{id}', 'update');
    Route::delete('/color/{id}', 'destroy');
});

Route::controller(TipoController::class)->group(function(){
    Route::get('/tipos', 'index');
    Route::get('/tipo/{id}', 'show');
    Route::post('/tipo', 'store');
    Route::put('/tipo/{id}', 'update');
    Route::delete('/tipo/{id}', 'destroy');
});

Route::controller(UsoController::class)->group(function(){
    Route::get('/usos', 'index');
    Route::get('/uso/{id}', 'show');
    Route::post('/uso', 'store');
    Route::put('/uso/{id}', 'update');
    Route::delete('/uso/{id}', 'destroy');
});

