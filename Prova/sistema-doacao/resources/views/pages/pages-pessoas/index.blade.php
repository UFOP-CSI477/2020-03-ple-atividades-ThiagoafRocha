@extends('layout')

@section('pagina-nome')
    Lista de Pessoas - Doe Sangue!
@endsection

@section('conteudo')
    <h1>Lista de Pessoas Cadastradas</h1>
    <table>
        <thead>
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