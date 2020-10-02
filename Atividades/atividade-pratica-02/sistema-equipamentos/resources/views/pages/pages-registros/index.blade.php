@extends('layout')

@section('titulo-pagina')
    Lista de Registros
@endsection

@section('conteudo')

    <h1 class="titulo-principal">Registros</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Data Limite</th>
                <th scope="col">Equipamento</th>
                <th scope="col">Usuário</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descrição</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{$registro->datalimite}}</td>
                    <td>{{$registro->equipamento->nome}}</td>
                    <td>{{$registro->user->name}}</td>
                    <td>@if ($registro->tipo == 1)
                            1 - Preventiva
                        @endif
                        @if ($registro->tipo == 2)
                            2 - Corretiva
                        @endif
                        @if ($registro->tipo == 3)
                            3 - Urgente
                        @endif
                        </td>
                    <td>{{$registro->descricao}}</td>
                    <td class="col-1"><a class="btn btn-info" href="{{ route('registros.show', $registro->id) }}">Detalhes</a></td>
                    <td class="col-1"><a class="btn btn-secondary" href="{{ route('registros.edit', $registro->id) }}">Alterar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('registros.create') }}" class="btn btn-primary" style="margin-top: 1em;">Cadastrar</a>

@endsection