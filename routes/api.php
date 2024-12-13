<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiMateriasCarrerasController;

// Ruta para autenticación (si usas Sanctum)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para la API de MateriasCarreras
Route::apiResource('materias_carreras', ApiMateriasCarrerasController::class);