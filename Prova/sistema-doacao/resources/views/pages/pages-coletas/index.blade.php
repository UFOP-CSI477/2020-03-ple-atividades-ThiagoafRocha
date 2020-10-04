@extends('layout')

@section('pagina-nome')
    Locais de Doação - Doe Sangue!
@endsection

@section('titulo')
<h1>Lista de Locais de Doação</h1>
@endsection

@section('conteudo')
    <h2 class="titulo-table-geral"> Locais de Doação</h2>
    <table class="table table-hover" style="background-color: #FFF">
        <thead class="thead-dark">
            <tr>
                <th>Local</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coletas as $coleta)
                <tr>
                    <td>{{ $coleta->nome }}</td>
                    <td>{{ $coleta->cidade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection