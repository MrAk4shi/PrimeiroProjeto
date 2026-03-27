@extends('layout')

@section('conteudo')

<h1>Décimo Terceiro Exercício - Metros para Centímetros</h1>

<form method="post" action="/resposta13">    
    @CSRF

    <div class="mb-3">
        <label for="metros" class="form-label">Informe o valor em metros</label>
        <input type="number" step="any" id="metros" name="metros" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($cm)
    <p class="text-success">O valor em centímetros é: {{ $cm }}</p>
@endisset

@endsection