@extends('layout')

@section('titulo-pagina')
    Criar Registro
@endsection

@section('conteudo')
<h1 class="titulo-principal">Formulário Manutenção</h1>
<form action=" {{ route('registros.store') }}" method="post" onsubmit="validaReg()">
    @csrf
    <div class="form-group">
        <label for="equipamento_id">Equipamento:</label>
        <select class="form-control" name="equipamento_id" id="equipamento_id">
        @foreach ($equipamentos as $equipamento)
            <option value="{{$equipamento->id}}">{{$equipamento->nome}}</option>
        @endforeach
    </select>
    </div>
    <div class="form-group">
        <label for="user_id">Usuário</label>
    <select class="form-control" name="user_id" id="user_id">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input class="form-control" type="text" name="descricao" id="descricao">
    </div>
    <div class="form-group">
        <label for="datalimite">Data:</label>
        <input class="form-control" type="text" name="datalimite" id="datalimite">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo:</label>
        <select class="form-control" name="tipo" id="tipo">
            <option value="1">Preventiva</option>
            <option value="2">Corretiva</option>
            <option value="3">Urgente</option>
        </select>
    </div>
    <button style="margin-top: 1em" class="btn btn-primary" type="submit">Cadastrar</button>
</form>
@endsection