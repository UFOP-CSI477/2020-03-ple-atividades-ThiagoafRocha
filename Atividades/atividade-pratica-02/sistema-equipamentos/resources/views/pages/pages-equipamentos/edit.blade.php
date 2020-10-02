@extends('layout')

@section('titulo-pagina')
    Editar um Equipamento
@endsection

@section('conteudo')

<h1 class="titulo-principal">Formulário</h1>

<form action=" {{ route('equipamentos.update', $equipamento->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Equipamento:</label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{ $equipamento->nome }}">
    </div>
    

    <button type="submit" class="btn btn-secondary" style="margin-top: 1em">Alterar</button>
</form>

<form action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="POST" onsubmit="return confirm('Certeza que deseja excluir?')">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger" style="margin-top: 0.5em;">Excluir</button>
</form>
@endsection