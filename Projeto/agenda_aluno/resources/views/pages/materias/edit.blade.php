@extends('layout')

@section('pagina-nome')
    Editar matéria
@endsection

@section('conteudo')
    <h2 class="titulo-table-geral">Edite a matéria</h2>
    <form class="form-group formulario" action="{{ route("materias.update", $materia->id) }}" method="POST" >
        @csrf
        @method("PUT")
        <label for="codigo">Código:</label>
        <input class="form-control" type="text" name="codigo" id="codigo" value="{{ $materia->codigo }}">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{ $materia->nome }}">
        <label for="faltas">Faltas:</label>
        <input class="form-control" type="text" name="faltas" id="faltas" value="{{ $materia->faltas }}">

        <input type="submit" value="Alterar" class="btn btn-primary" style="margin-top: 1em">
    </form>
@endsection