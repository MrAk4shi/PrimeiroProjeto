@extends('layout')

@section('conteudo')

<h1>Vigésimo Exercício - Velocidade Média</h1>

<form method="post" action="/resposta20">    
    @CSRF

    <div class="mb-3">
        <label for="distancia" class="form-label">Informe a distância</label>
        <input type="number" step="any" id="distancia" name="distancia" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="tempo" class="form-label">Informe o tempo</label>
        <input type="number" step="any" id="tempo" name="tempo" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($velocidade)
    <p class="text-success">A velocidade média é: {{ $velocidade }}</p>
@endisset

@endsection