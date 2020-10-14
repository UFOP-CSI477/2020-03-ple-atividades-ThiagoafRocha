@extends('layout')

@section('pagina-nome')
    Adicionar atividade
@endsection

@section('conteudo')
    <h2 class="titulo-table-geral">Adicionar atividade</h2>
    <form class="form-group formulario" action="{{ route("atividades.store") }}" method="POST">
        @csrf
        <label for="materia">Matéria</label>
        <select class="form-control" name="materia_id" id="materia">
            @foreach ($materias as $materia)
                <option value="{{ $materia->id }}">{{ $materia->nome }}</option>
            @endforeach
        </select>
        <label for="tipo">Tipo:</label>
        <select class="form-control" name="tipo" id="tipo">
            <option value="1">Exercício</option>
            <option value="2">Trabalho</option>
            <option value="3">Prova</option>
        </select>
        <label for="descricao">Descrição:</label>
        <input class="form-control" type="text" name="descricao" id="descricao">
        <label for="data_entrega">Data de entrega:</label>
        <input class="form-control" type="text" name="data_entrega" id="data_entrega">
        <input class="form-control" type="hidden" name="nota" id="nota" value="0">

        <input type="submit" value="Cadastrar" class="btn btn-primary" style="margin-top: 1em">
    </form>
@endsection