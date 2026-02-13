<?php

use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;


Route::get('/paginainicial', function () {
    return view('welcome');
});

Route::get('/exercicio', function () {
    return view('exercicio');
});

Route::post('/resposta', function (Request $request) {
    $valor1 = $request->input('valor1');
    $valor2 = $request->input('valor2');
    $soma = $valor1 + $valor2;
    return ("A soma é $soma");
});