@extends('layout')

@section('conteudo')

<h1>Nono Exercício - Área do Círculo</h1>

<form method="post" action="/resposta9">    
    @CSRF

    <div class="mb-3">
        <label for="raio" class="form-label">Informe o raio</label>
        <input type="number" step="any" id="raio" name="raio" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($area)
    <p class="text-success">A área do círculo é: {{ $area }}</p>
@endisset

@endsection