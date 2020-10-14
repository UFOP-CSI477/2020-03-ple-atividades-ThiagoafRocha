@extends('layout')

@section('pagina-nome')
    Adicionar atividade
@endsection

@section('conteudo')
    <h2 class="titulo-table-geral">Adicionar atividade</h2>
    <form class="form-group formulario" action="{{ route("atividades.store") }}" method="POST">
        @csrf
        <label for="tipo">Tipo:</label>
        <input class="form-control" type="text" name="tipo" id="tipo">
        <label for="descricao">Descrição:</label>
        <input class="form-control" type="text" name="descricao" id="descricao">
        <label for="data_entrega">Data de entrega:</label>
        <input class="form-control" type="text" name="data_entrega" id="data_entrega">
        <label for="nota">Nota:</label>
        <input class="form-control" type="text" name="nota" id="nota">

        <input type="submit" value="Cadastrar">
    </form>
@endsection