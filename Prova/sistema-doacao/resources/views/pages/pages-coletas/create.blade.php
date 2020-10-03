@extends('layout')

@section('pagina-nome')
    Cadastrar Local - Doe Sangue!
@endsection

@section('conteudo')
    <h1>Cadastrar Locais de Doação</h1>
    <form action="{{ route('coletas.store') }}" method="POST">
        @csrf
        <label for="nome">Local</label>
        <input type="text" name="nome" id="nome">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade">

        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
@endsection