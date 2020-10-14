@extends('layout')

@section('pagina-nome')
    Editar atividade
@endsection

@section('conteudo')
    <h2 class="titulo-table-geral">Editar atividade</h2>
    <form class="form-group formulario" action="{{ route("atividades.update", $atividade->id) }}" method="POST">
        @csrf
        @method("PUT")
        <label for="tipo">Tipo:</label>
        <input class="form-control" type="text" name="tipo" id="tipo" value="{{ $atividade->tipo }}">
        <label for="descricao">Descrição:</label>
        <input class="form-control" type="text" name="descricao" id="descricao" value="{{ $atividade->descricao }}">
        <label for="data_entrega">Data de entrega:</label>
        <input class="form-control" type="text" value="0" name="data_entrega" id="data_entrega" value="{{ $atividade->data }}">
        <label for="nota">Nota:</label>
        <input class="form-control" type="text" name="nota" id="nota" value="{{ $atividade->nota }}">

        <input class="btn btn-primary" type="submit" value="Alterar" style="margin-top: 1em">
    </form>

    <form action="{{ route('atividades.destroy', $atividade->id) }}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Excluir" class="btn btn-danger">
    </form>
@endsection