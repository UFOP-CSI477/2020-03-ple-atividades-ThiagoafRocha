@extends('layout')

@section('pagina-nome')
    Cadastrar Agendamento - Doe Sangue!
@endsection

@section('conteudo')
    <h1>Cadatrar Agendamento</h1>
    <form action="{{ route('agendamentos.update', $agendamento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="pessoa_id">Doador: </label>
        <select name="pessoa_id" id="pessoa_id">
            @foreach ($pessoas as $pessoa)
                @if ($agendamento->pessoa_id == $pessoa->id)
                    <option value="{{ $pessoa->id }}" selected>{{ $pessoa->nome }}</option>
                @else
                    <option value="{{ $pessoa->id }}">{{ $pessoa->nome }} </option>
                @endif
                @endforeach
        </select>
        <label for="coleta_id">Cidade</label>
        <select name="coleta_id" id="coleta_id">
            @foreach ($coletas as $coleta)
                @if ($agendamento->coleta_id == $coleta->id)
                    <option value="{{ $coleta->id }}" selected>{{ $coleta->cidade }}</option>
                @else
                    <option value="{{ $coleta->id }}">{{ $coleta->cidade }}</option>
                @endif 
            @endforeach
        </select>
        <label for="data">Data</label>
        <input type="text" name="data" id="data" value="{{ $agendamento->data }}">

        <input type="submit" value="Alterar" class="btn btn-primary">
    </form>

    <form action="{{ route('agendamentos.destroy', $agendamento->id) }}" method="POST" onsubmit="return confirm('Certeza que deseja excluir?')">
        @csrf
        @method('DELETE')
    
        <button type="submit" class="btn btn-danger" style="margin-top: 0.5em;">Excluir</button>
    </form>
@endsection