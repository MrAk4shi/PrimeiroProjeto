@extends('layout')

@section('conteudo')

<h1>Sexto Exercício - Conversão de Temperatura</h1>

<form method="post" action="/resposta6">    
    @CSRF

    <div class="mb-3">
        <label for="celsius" class="form-label">Informe a temperatura em Celsius</label>
        <input type="number" step="any" id="celsius" name="celsius" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($fahrenheit)
    <p class="text-success">A temperatura em Fahrenheit é: {{ $fahrenheit }}</p>
@endisset

@endsection