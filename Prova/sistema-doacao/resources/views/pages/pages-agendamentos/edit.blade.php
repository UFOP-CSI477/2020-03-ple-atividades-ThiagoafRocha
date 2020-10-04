@extends('layout')

@section('pagina-nome')
    Cadastrar Agendamento - Doe Sangue!
@endsection

@section('titulo')
<h1>Editar Agendamento</h1>
@endsection

@section('conteudo')
    <div class="cad-form">
    <form class="form-group" action="{{ route('agendamentos.update', $agendamento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="pessoa_id">Doador: </label>
        <select class="form-control" name="pessoa_id" id="pessoa_id">
            @foreach ($pessoas as $pessoa)
                @if ($agendamento->pessoa_id == $pessoa->id)
                    <option value="{{ $pessoa->id }}" selected>{{ $pessoa->nome }}</option>
                @else
                    <option value="{{ $pessoa->id }}">{{ $pessoa->nome }} </option>
                @endif
                @endforeach
        </select>
        <label for="coleta_id">Cidade:</label>
        <select class="form-control" name="coleta_id" id="coleta_id">
            @foreach ($coletas as $coleta)
                @if ($agendamento->coleta_id == $coleta->id)
                    <option value="{{ $coleta->id }}" selected>{{ $coleta->cidade }}</option>
                @else
                    <option value="{{ $coleta->id }}">{{ $coleta->cidade }}</option>
                @endif 
            @endforeach
        </select>
        <label for="data">Data:</label>
        <input class="form-control" type="text" name="data" id="data" value="{{ $agendamento->data }}">

        <input type="submit" value="Alterar" class="btn btn-primary" style="margin-top: 0.5em;">
    </form>
    

    <form action="{{ route('agendamentos.destroy', $agendamento->id) }}" method="POST" onsubmit="return confirm('Certeza que deseja excluir?')">
        @csrf
        @method('DELETE')
    
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    </div>
@endsection