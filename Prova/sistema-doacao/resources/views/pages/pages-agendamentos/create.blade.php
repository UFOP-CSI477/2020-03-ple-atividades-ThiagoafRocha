@extends('layout')

@section('pagina-nome')
    Cadastrar Agendamento - Doe Sangue!
@endsection

@section('conteudo')
    <h1>Cadatrar Agendamento</h1>
    <form action="{{ route('agendamentos.store') }}" method="POST">
        @csrf
        <label for="pessoa_id">Doador: </label>
        <select name="pessoa_id" id="pessoa_id">
            @foreach ($pessoas as $pessoa)
                <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
            @endforeach
        </select>
        <label for="coleta_id">Cidade</label>
        <select name="coleta_id" id="coleta_id">
            @foreach ($coletas as $coleta)
                <option value="{{ $coleta->id }}">{{ $coleta->cidade }}</option>
            @endforeach
        </select>
        <label for="data">Data</label>
        <input type="text" name="data" id="data">

        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
@endsection