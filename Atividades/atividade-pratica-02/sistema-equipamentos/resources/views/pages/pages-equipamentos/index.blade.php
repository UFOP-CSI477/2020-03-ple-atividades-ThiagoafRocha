@extends('layout')

@section('titulo-pagina')
    Lista de Equipamentos
@endsection

@section('conteudo')

    <h1 class="titulo-principal">Equipamentos</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipamentos as $equipamento)
                <tr>
                    <td class="col-1">{{$equipamento->id}}</td>
                    <td class="col-9">{{$equipamento->nome}}</td>
                    <td class="col-1"><a class="btn btn-info" href="{{ route('equipamentos.show', $equipamento->id) }}">Detalhes</a></td>
                    <td class="col-1"><a class="btn btn-secondary" href="{{ route('equipamentos.edit', $equipamento->id) }}">Alterar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('equipamentos.create') }}" class="btn btn-primary" style="margin-top: 1em;">Cadastrar</a>

@endsection