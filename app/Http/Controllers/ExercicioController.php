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

    //ex5
    public function exibirFormulario5(){
        return view('exercicio5');
    }

    public function calcularMedia(Request $request){
    $nota1 = $request->input('nota1');
    $nota2 = $request->input('nota2');
    $nota3 = $request->input('nota3');

    $media = ($nota1 + $nota2 + $nota3) / 3;

    return view('exercicio5', ['media' => $media]);
    }

    //ex6
public function exibirFormulario6(){
    return view('exercicio6');
}

public function calcularTemperatura(Request $request){
    $celsius = $request->input('celsius');

    $fahrenheit = ($celsius * 9/5) + 32;

    return view('exercicio6', ['fahrenheit' => $fahrenheit]);
}

//ex7
public function exibirFormulario7(){
    return view('exercicio7');
}

public function calcularTemperaturaF(Request $request){
    $fahrenheit = $request->input('fahrenheit');

    $celsius = ($fahrenheit - 32) * 5/9;

    return view('exercicio7', ['celsius' => $celsius]);
}

//ex8
public function exibirFormulario8(){
    return view('exercicio8');
}

public function calcularAreaRet(Request $request){
    $largura = $request->input('largura');
    $altura = $request->input('altura');

    $area = $largura * $altura;

    return view('exercicio8', ['area' => $area]);
}

//ex9
public function exibirFormulario9(){
    return view('exercicio9');
}

public function calcularAreaCirculo(Request $request){
    $raio = $request->input('raio');

    $area = pi() * ($raio * $raio);

    return view('exercicio9', ['area' => $area]);
}

//ex10
public function exibirFormulario10(){
    return view('exercicio10');
}

public function calcularPerimetroRet(Request $request){
    $largura = $request->input('largura');
    $altura = $request->input('altura');

    $perimetro = 2 * ($largura + $altura);

    return view('exercicio10', ['perimetro' => $perimetro]);
}

}

