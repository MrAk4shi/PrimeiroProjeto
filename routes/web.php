<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ExercicioController;


Route::get('/paginainicial', function () {
    return view('welcome');
});

//ex1
Route::get('/exercicio', [ExercicioController::class, 'exibirFormulario']);
Route::post('/resposta', [ExercicioController::class, 'calcularSoma']); 

//Rota para abrir o formulário do exercício 2
Route::get('/exercicio2', [ExercicioController::class, 'exibirFormulario2']);
//Rota para receber os dados do formulário do exercício 2
Route::post('/resposta2', [ExercicioController::class, 'calcularSub']);

//ex3
Route::get('/exercicio3', [ExercicioController::class, 'exibirFormulario3']);
Route::post('/resposta3', [ExercicioController::class, 'calcularMult']); 

//ex4
Route::get('/exercicio4', [ExercicioController::class, 'exibirFormulario4']);
Route::post('/resposta4', [ExercicioController::class, 'calcularDiv']); 

//ex5
Route::get('/exercicio5', [ExercicioController::class, 'exibirFormulario5']);
Route::post('/resposta5', [ExercicioController::class, 'calcularMedia']);

//ex6
Route::get('/exercicio6', [ExercicioController::class, 'exibirFormulario6']);
Route::post('/resposta6', [ExercicioController::class, 'calcularTemperatura']);

//ex7
Route::get('/exercicio7', [ExercicioController::class, 'exibirFormulario7']);
Route::post('/resposta7', [ExercicioController::class, 'calcularTemperaturaF']);

//ex8
Route::get('/exercicio8', [ExercicioController::class, 'exibirFormulario8']);
Route::post('/resposta8', [ExercicioController::class, 'calcularAreaRet']);

//ex9
Route::get('/exercicio9', [ExercicioController::class, 'exibirFormulario9']);
Route::post('/resposta9', [ExercicioController::class, 'calcularAreaCirculo']);

//ex10
Route::get('/exercicio10', [ExercicioController::class, 'exibirFormulario10']);
Route::post('/resposta10', [ExercicioController::class, 'calcularPerimetroRet']);

//ex11
Route::get('/exercicio11', [ExercicioController::class, 'exibirFormulario11']);
Route::post('/resposta11', [ExercicioController::class, 'calcularPerimetroCirculo']);