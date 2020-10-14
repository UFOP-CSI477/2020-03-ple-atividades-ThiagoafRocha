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
        <select class="form-control" name="tipo" id="tipo">
            <option value="1">Exercício</option>
            <option value="2">Trabalho</option>
            <option value="3">Prova</option>
        </select>
        <label for="descricao">Descrição:</label>
        <input class="form-control" type="text" name="descricao" id="descricao" value="{{ $atividade->descricao }}">
        <label for="data_entrega">Data de entrega:</label>
        <input class="form-control" type="text" name="data_entrega" id="data_entrega" value="{{ $atividade->data_entrega }}">
        <label for="nota">Nota:</label>
        <input class="form-control" type="text" name="nota" id="nota" value="{{ $atividade->nota }}">

        <input class="btn btn-primary" type="submit" value="Alterar" style="margin-top: 1em">
    </form>

    <form action="{{ route('atividades.destroy', $atividade->id) }}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Excluir" class="btn btn-danger" style="margin: 1em 0em">
    </form>
@endsection