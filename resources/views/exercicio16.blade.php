@extends('layout')

@section('conteudo')

<h1>Décimo Sexto Exercício - Cálculo de Desconto</h1>

<form method="post" action="/resposta16">    
    @CSRF

    <div class="mb-3">
        <label for="preco" class="form-label">Informe o preço</label>
        <input type="number" step="any" id="preco" name="preco" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="desconto" class="form-label">Informe o percentual de desconto (%)</label>
        <input type="number" step="any" id="desconto" name="desconto" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($valorFinal)
    <p class="text-success">O preço com desconto é: {{ $valorFinal }}</p>
@endisset

@endsection