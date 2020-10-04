@extends('layout')

@section('pagina-nome')
    Lista de Pessoas - Doe Sangue!
@endsection

@section('titulo')
<h1>Lista de Pessoas Cadastradas</h1>
@endsection

@section('conteudo')
    <h2 class="titulo-table-geral">Lista de Doadores</h2>
    <table class="table table-hover" style="background-color: #FFF">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Tipo Sanguineo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->id }}</td>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection