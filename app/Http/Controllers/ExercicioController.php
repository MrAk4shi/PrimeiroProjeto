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

//ex11
public function exibirFormulario11(){
    return view('exercicio11');
}

public function calcularPerimetroCirculo(Request $request){
    $raio = $request->input('raio');

    $perimetro = 2 * pi() * $raio;

    return view('exercicio11', ['perimetro' => $perimetro]);
}

//ex12
public function exibirFormulario12(){
    return view('exercicio12');
}

public function calcularPotencia(Request $request){
    $base = $request->input('base');
    $expoente = $request->input('expoente');

    $resultado = pow($base, $expoente);

    return view('exercicio12', ['resultado' => $resultado]);
}

//ex13
public function exibirFormulario13(){
    return view('exercicio13');
}

public function converterCm(Request $request){
    $metros = $request->input('metros');

    $cm = $metros * 100;

    return view('exercicio13', ['cm' => $cm]);
}

//ex14
public function exibirFormulario14(){
    return view('exercicio14');
}

public function converterMilhas(Request $request){
    $km = $request->input('km');

    $milhas = $km * 0.621371;

    return view('exercicio14', ['milhas' => $milhas]);
}

//ex15
public function exibirFormulario15(){
    return view('exercicio15');
}

public function calcularIMC(Request $request){
    $peso = $request->input('peso');
    $altura = $request->input('altura');

    if ($altura != 0) {
        $imc = $peso / ($altura * $altura);
        return view('exercicio15', ['imc' => $imc]);
    } else {
        return "Altura não pode ser zero";
    }
}

//ex16
public function exibirFormulario16(){
    return view('exercicio16');
}

public function calcularDesconto(Request $request){
    $preco = $request->input('preco');
    $desconto = $request->input('desconto');

    $valorFinal = $preco - ($preco * ($desconto / 100));

    return view('exercicio16', ['valorFinal' => $valorFinal]);
}

//ex17
public function exibirFormulario17(){
    return view('exercicio17');
}

public function jurosSimples(Request $request){
    $capital = $request->input('capital');
    $taxa = $request->input('taxa');
    $periodo = $request->input('periodo');

    $juros = $capital * $taxa * $periodo;

    return view('exercicio17', ['juros' => $juros]);
}

//ex18
public function exibirFormulario18(){
    return view('exercicio18');
}

public function jurosCompostos(Request $request){
    $capital = $request->input('capital');
    $taxa = $request->input('taxa');
    $periodo = $request->input('periodo');

    $montante = $capital * pow((1 + $taxa), $periodo);

    return view('exercicio18', ['montante' => $montante]);
}

//ex19
public function exibirFormulario19(){
    return view('exercicio19');
}

public function converterTempo(Request $request){
    $dias = $request->input('dias');

    $horas = $dias * 24;
    $minutos = $dias * 24 * 60;
    $segundos = $dias * 24 * 60 * 60;

    return view('exercicio19', [
        'horas' => $horas,
        'minutos' => $minutos,
        'segundos' => $segundos
    ]);
}

//ex20
public function exibirFormulario20(){
    return view('exercicio20');
}

public function calcularVelocidade(Request $request){
    $distancia = $request->input('distancia');
    $tempo = $request->input('tempo');

    if ($tempo != 0) {
        $velocidade = $distancia / $tempo;

        return view('exercicio20', ['velocidade' => $velocidade]);
    } else {
        return('O tempo não pode ser zero');
    }
}

}

