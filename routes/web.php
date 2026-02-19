<?php

use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;
use App\Http\Controllers\ExercicioController;


Route::get('/paginainicial', function () {
    return view('welcome');
});

Route::get('/exercicio', [ExercicioController::class, 'exibirFormulario']);

Route::post('/resposta', [ExercicioController::class, 'calcularSoma']); 