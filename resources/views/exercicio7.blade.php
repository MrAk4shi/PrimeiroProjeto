@extends('layout')

@section('conteudo')

<h1>Sétimo Exercício - Conversão de Temperatura</h1>

<form method="post" action="/resposta7">    
    @CSRF

    <div class="mb-3">
        <label for="fahrenheit" class="form-label">Informe a temperatura em Fahrenheit</label>
        <input type="number" step="any" id="fahrenheit" name="fahrenheit" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($celsius)
    <p class="text-success">A temperatura em Celsius é: {{ $celsius }}</p>
@endisset

@endsection