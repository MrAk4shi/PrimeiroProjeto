@extends('layout')

@section('conteudo')

<h1>Décimo Exercício - Perímetro do Retângulo</h1>

<form method="post" action="/resposta10">    
    @CSRF

    <div class="mb-3">
        <label for="largura" class="form-label">Informe a largura</label>
        <input type="number" step="any" id="largura" name="largura" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Informe a altura</label>
        <input type="number" step="any" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($perimetro)
    <p class="text-success">O perímetro do retângulo é: {{ $perimetro }}</p>
@endisset

@endsection