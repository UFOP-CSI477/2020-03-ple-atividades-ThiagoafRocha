@extends('layout')

@section('pagina-nome')
    Locais de Doação - Doe Sangue!
@endsection

@section('conteudo')
    <h1>Lista de Locais de Doação</h1>
    <table>
        <thead>
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