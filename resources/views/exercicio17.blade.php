@extends('layout')

@section('conteudo')

<h1>Décimo Sétimo Exercício - Juros Simples</h1>

<form method="post" action="/resposta17">    
    @CSRF

    <div class="mb-3">
        <label for="capital" class="form-label">Informe o capital</label>
        <input type="number" step="any" id="capital" name="capital" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="taxa" class="form-label">Informe a taxa (ex: 0.05 para 5%)</label>
        <input type="number" step="any" id="taxa" name="taxa" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="periodo" class="form-label">Informe o período</label>
        <input type="number" step="any" id="periodo" name="periodo" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($juros)
    <p class="text-success">O valor dos juros é: {{ $juros }}</p>
@endisset

@endsection