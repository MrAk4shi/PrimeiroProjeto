@extends('layout')

@section('conteudo')

<h1>Quinto Exercício - Média de Notas</h1>

<form method="post" action="/resposta5">    
    @CSRF

    <div class="mb-3">
        <label for="nota1" class="form-label">Informe a primeira nota</label>
        <input type="number" step="any" id="nota1" name="nota1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota2" class="form-label">Informe a segunda nota</label>
        <input type="number" step="any" id="nota2" name="nota2" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota3" class="form-label">Informe a terceira nota</label>
        <input type="number" step="any" id="nota3" name="nota3" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($media)
    <p class="text-success">A média das notas é: {{ $media }}</p>
@endisset

@endsection