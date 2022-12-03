<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PreguntaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pregunta', PreguntaController::class);
Route::resource('/docente', DocenteController::class);

Route::resource('/materia',MateriaController::class);
Route::resource('/evaluacion', EvaluacionController::class);
Route::resource('/carrera', CarreraController::class);
