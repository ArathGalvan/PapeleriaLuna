<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\VentaController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\InventarioController;
use App\Http\Controllers\Api\EmpleadoController;
use App\Http\Controllers\Api\ClienteController;
use Illuminate\Support\Facades\Route;

Route::apiResource('productos',ProductoController::class);

Route::apiResource('inventario',InventarioController::class);

Route::apiResource('ventas',VentaController::class);

Route::apiResource('clientes',ClienteController::class);

Route::apiResource('empleado',EmpleadoController::class);


//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
  //  return $request->user();
//});


