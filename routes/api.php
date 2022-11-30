<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FactoryAdmin\AgendamentoController;
use App\Http\Controllers\FactoryAdmin\TransportadoraController;
use App\Http\Controllers\FactoryAdmin\VagaController;
use App\Http\Controllers\Transportadora\MotoristaController;
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

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('factoryAdmin')->group(function() {
        Route::resource('transportadora', TransportadoraController::class);
        Route::resource('vaga', VagaController::class)->only('index', 'destroy', 'store');
        Route::resource('agendamento', AgendamentoController::class)->only('index', 'destroy', 'store');
    });
    Route::prefix('transportadora')->group(function() {
        Route::resource('motorista', MotoristaController::class);

    });

});
