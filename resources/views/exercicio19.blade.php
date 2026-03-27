@extends('layout')

@section('conteudo')

<h1>Décimo Nono Exercício - Conversão de Tempo</h1>

<form method="post" action="/resposta19">    
    @CSRF

    <div class="mb-3">
        <label for="dias" class="form-label">Informe o valor em dias</label>
        <input type="number" step="any" id="dias" name="dias" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($horas)
    <p class="text-success">Horas: {{ $horas }}</p>
    <p class="text-success">Minutos: {{ $minutos }}</p>
    <p class="text-success">Segundos: {{ $segundos }}</p>
@endisset

@endsection