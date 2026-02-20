@extends('layout')

@section('conteudo')

<h1>Quarto Exercício - Divisão</h1>
<form method="post" action="/resposta4">    
    @CSRF
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe o primeiro valor</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="valor2" class="form-label">Informe o segundo valor</label>
        <input type="number" id="valor2" name="valor2" class="form-control" required="">
    </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($divisao)
    <p class="text-success">O valor da divisão é: {{ $divisao }}</p>
@endisset

@endsection