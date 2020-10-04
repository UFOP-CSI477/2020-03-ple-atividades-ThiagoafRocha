@extends('layout')

@section('pagina-nome')
    Cadastrar Local - Doe Sangue!
@endsection

@section('titulo')
<h1>Cadastrar Locais de Doação</h1>
@endsection

@section('conteudo')
    <div class="cad-form">
    <form class="form-group" action="{{ route('coletas.store') }}" method="POST">
        @csrf
        <label for="nome">Local</label>
        <input class="form-control" type="text" name="nome" id="nome">
        <label for="cidade">Cidade</label>
        <input class="form-control" type="text" name="cidade" id="cidade">

        <input type="submit" value="Cadastrar" class="btn btn-primary" style="margin-top: 1em">
    </form>
    </div>
@endsection