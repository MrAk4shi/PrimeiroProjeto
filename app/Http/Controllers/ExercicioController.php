<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller {

    //ex1
    public function exibirFormulario(){
        return view('exercicio');
    }

    public function calcularSoma(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $soma = $valor1 + $valor2;
        return view('exercicio', ['soma' => $soma]);
    }

    //ex2
    public function exibirFormulario2(){
        return view('exercicio2');
    }

    public function calcularSub(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $sub = $valor1 - $valor2;
        return view('exercicio2', ['sub' => $sub]);
    }

    //ex3
    public function exibirFormulario3(){
        return view('exercicio3');
    }

    public function calcularMult(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $mult = $valor1 * $valor2;
        return view('exercicio3', ['mult' => $mult]);
    }

    //ex4
    public function exibirFormulario4(){
        return view('exercicio4');
    }

    public function calcularDiv(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        if ($valor2 != 0)
        {
        $divisao = $valor1 / $valor2;
        return view('exercicio4', ['divisao' => $divisao]);
        }
        else
        {
            return('Valor 2 igual a zero');
        }
    }
}