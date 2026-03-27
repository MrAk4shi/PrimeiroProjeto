@extends('layout')

@section('conteudo')

<h1>Décimo Primeiro Exercício - Perímetro do Círculo</h1>

<form method="post" action="/resposta11">    
    @CSRF

    <div class="mb-3">
        <label for="raio" class="form-label">Informe o raio</label>
        <input type="number" step="any" id="raio" name="raio" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($perimetro)
    <p class="text-success">O perímetro do círculo é: {{ $perimetro }}</p>
@endisset

@endsection