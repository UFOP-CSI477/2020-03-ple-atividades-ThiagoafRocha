@extends('layout')

@section('pagina-nome')
    Cadastrar Agendamento - Doe Sangue!
@endsection

@section('titulo')
<h1>Cadastrar Agendamento</h1>
@endsection

@section('conteudo')
    <div class="cad-form">
    <form class="form-group" action="{{ route('agendamentos.store') }}" method="POST">
        @csrf
        <label for="pessoa_id">Doador: </label>
        <select class="form-control" name="pessoa_id" id="pessoa_id">
            @foreach ($pessoas as $pessoa)
                <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
            @endforeach
        </select>
        <label for="coleta_id">Cidade:</label>
        <select class="form-control" name="coleta_id" id="coleta_id">
            @foreach ($coletas as $coleta)
                <option value="{{ $coleta->id }}">{{ $coleta->cidade }}</option>
            @endforeach
        </select>
        <label for="data">Data:</label>
        <input class="form-control" type="text" name="data" id="data">

        <input type="submit" value="Cadastrar" class="btn btn-primary" style="margin-top: 1em">
    </form>
    </div> 
@endsection