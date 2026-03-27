@extends('layout')
@section('conteudo')

<h1>Área do Retângulo</h1>

<form method="post" action="/resposta8">
@CSRF
<input type="number" name="largura" placeholder="Largura" required>
<input type="number" name="altura" placeholder="Altura" required>
<button type="submit">Enviar</button>
</form>

@isset($area)
<p>{{ $area }}</p>
@endisset

@endsection