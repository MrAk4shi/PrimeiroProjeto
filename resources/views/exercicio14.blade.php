@extends('layout')

@section('conteudo')

<h1>Décimo Quarto Exercício - Km para Milhas</h1>

<form method="post" action="/resposta14">    
    @CSRF

    <div class="mb-3">
        <label for="km" class="form-label">Informe o valor em quilômetros</label>
        <input type="number" step="any" id="km" name="km" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($milhas)
    <p class="text-success">O valor em milhas é: {{ $milhas }}</p>
@endisset

@endsection