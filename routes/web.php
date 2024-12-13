<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriasCarrerasController;

// Ruta para la página principal
Route::get('/', function () {
    return view('home'); 
});

// Rutas RESTful para MateriasCarrerasController
Route::resource('materias_carreras', MateriasCarrerasController::class);




