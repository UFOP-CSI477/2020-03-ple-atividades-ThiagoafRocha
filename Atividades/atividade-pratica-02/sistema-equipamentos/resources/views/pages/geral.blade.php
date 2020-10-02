@extends('layout')

@section('titulo-pagina')
    Área Geral - Suporte
@endsection

@section('conteudo')

<h1 class="titulo-principal">Área Geral - Suporte</h1>

<h2 class="titulo-geral">Tabela de Equipamentos</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($equipamentos as $equipamento)
            <tr>
                <td class="col-2">{{$equipamento->id}}</td>
                <td class="col-10">{{$equipamento->nome}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<h2 class="titulo-geral">Tabela de Manutenções</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Data Limite</th>
            <th scope="col">Equipamento</th>
            <th scope="col">Nome do cliente</th>
            <th scope="col">Tipo da manutenção</th>
            <th scope="col">Tipo de problema</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registros as $registro)
            <tr>
                <td>{{$registro->datalimite}}</td>
                <td>{{$registro->equipamento->nome}}</td>
                <td>{{$registro->user->name}}</td>
                <td>{{$registro->tipo}}</td>
                <td>{{$registro->descricao}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection