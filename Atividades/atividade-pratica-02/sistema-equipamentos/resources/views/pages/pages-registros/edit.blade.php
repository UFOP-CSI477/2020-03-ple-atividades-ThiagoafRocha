@extends('layout')

@section('titulo-pagina')
    Editar Registro
@endsection

@section('conteudo')

<h1 class="titulo-principal">Formulário</h1>

<form action=" {{ route('registros.update', $registro->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="equipamento_id">Equipamento:</label>
        <select class="form-control" name="equipamento_id" id="equipamento_id">
            @foreach ($equipamentos as $equipamento)
                <option value="{{$equipamento->id}}"
                    @if ($registro->equipamento_id == $equipamento->id)
                        selected
                    @endif
                    >{{$equipamento->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="user_id">Usuário</label>
        <select class="form-control" name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{$user->id}}"
                    @if ($registro->user_id == $registro->id)
                        selected
                    @endif
                    >{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input class="form-control" type="text" name="descricao" id="descricao" value="{{ $registro->descricao }}">
    </div>
    <div class="form-group">
        <label for="datalimite">Data:</label>
        <input class="form-control" type="text" name="datalimite" id="datalimite" value="{{ $registro->datalimite }}">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo:</label>
        <select class="form-control" name="tipo" id="tipo">
            <option value="1">Preventiva</option>
            <option value="2">Corretiva</option>
            <option value="3">Urgente</option>
        </select>
    </div>
    <button type="submit" class="btn btn-secondary" style="margin-top: 1em">Alterar</button>
</form>

<form action="{{ route('registros.destroy', $registro->id) }}" method="POST" onsubmit="return confirm('Certeza que deseja excluir?')">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger" style="margin-top: 0.5em;">Excluir</button>
</form>
@endsection