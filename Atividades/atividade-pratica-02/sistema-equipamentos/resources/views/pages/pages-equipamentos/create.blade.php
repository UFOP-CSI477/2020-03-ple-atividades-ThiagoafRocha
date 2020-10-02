@extends('layout')

@section('titulo-pagina')
    Cadastrar Equipamento
@endsection

@section('conteudo')

<h1 class="titulo-principal">Formulário Equipamentos</h1>

<form action=" {{ route('equipamentos.store') }}" method="post" onsubmit="return validaEquip()">
    @csrf
    <div class="form-group">
        <label for="nome">Equipamento:</label>
        <input class="form-control" type="text" name="nome" id="nome">
    </div>
    
    <button type="submit" class="btn btn-primary" style="margin-top: 1em">Cadastrar</button>
</form>
@endsection