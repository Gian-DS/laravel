<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutasController;

Route::get('/', function () {
    return "Bienvenido Estudiante Sena";
});

Route::get('saludo/{nombre?}/{adso?}/{cedula?}',[RutasController::class,'saludo']);
Route::get('saludo/rutados/{telefono?}/{direccion?}/',[RutasController::class,'ruta2']);
Route::get('rutatres/{num1}/{num2}/{num3}', [RutasController::class,'ruta3']);
