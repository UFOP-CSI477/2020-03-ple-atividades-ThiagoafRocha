@extends('principal')

@section('conteudo')

    <h1>Dados do Estado</h1>

    <p>Id: {{ $produto->id }}</p>
    <p>Nome: {{ $produto->nome }}</p>
    <p>Unidade de Medida: {{ $produto->um }}</p>

<a href="{{ route ('produtos.edit', $produto->id)}}">Editar</a>

<a href="{{ route('produtos.index') }}">Voltar</a>

<form name="formDelete" action="{{ route('produtos.destroy', $produto->id)}}" method="POST" onsubmit="return confirm('Confirma a exclusão do prduto?')">
    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">
</form>

@endsection