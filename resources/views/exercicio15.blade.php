@extends('layout')

@section('conteudo')

<h1>Décimo Quinto Exercício - Cálculo de IMC</h1>

<form method="post" action="/resposta15">    
    @CSRF

    <div class="mb-3">
        <label for="peso" class="form-label">Informe o peso (kg)</label>
        <input type="number" step="any" id="peso" name="peso" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Informe a altura (m)</label>
        <input type="number" step="any" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($imc)
    <p class="text-success">O seu IMC é: {{ $imc }}</p>
@endisset

@endsection