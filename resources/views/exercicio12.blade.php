@extends('layout')

@section('conteudo')

<h1>Décimo Segundo Exercício - Potência</h1>

<form method="post" action="/resposta12">    
    @CSRF

    <div class="mb-3">
        <label for="base" class="form-label">Informe a base</label>
        <input type="number" step="any" id="base" name="base" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="expoente" class="form-label">Informe o expoente</label>
        <input type="number" step="any" id="expoente" name="expoente" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)
    <p class="text-success">O resultado é: {{ $resultado }}</p>
@endisset

@endsection