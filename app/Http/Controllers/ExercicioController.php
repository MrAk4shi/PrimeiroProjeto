<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class ExercicioController extends Controller {

    public function exibirFormulario(){
        return view('exercicio');
    }

    public function calcularSoma(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $soma = $valor1 + $valor2;
        return("A soma é: $soma");
        return view('exercicio', ['soma' => $soma]);
    }

}