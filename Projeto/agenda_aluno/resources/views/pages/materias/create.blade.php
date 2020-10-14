@extends('layout')

@section('pagina-nome')
    Adicionar matéria
@endsection

@section('conteudo')
    <h2 class="titulo-table-geral">Adicionar matéria</h2>
    <form action="{{ route("materias.store") }}" method="POST" class="form-group formulario">
        @csrf
        <label for="usuario">Usuário:</label>
        <select class="form-control" name="user_id" id="usuario">
            @foreach ($users as $user)
                <option value="{{ $user->id }}"> {{ $user->name }}</option>
            @endforeach
        </select>
        <label for="codigo">Código:</label>
        <input class="form-control" type="text" name="codigo" id="codigo">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome">
        <input type="hidden" value="0" name="faltas" id="faltas">

        <input type="submit" value="Cadastrar" class="btn btn-primary" style="margin-top: 1em">
    </form>
@endsection