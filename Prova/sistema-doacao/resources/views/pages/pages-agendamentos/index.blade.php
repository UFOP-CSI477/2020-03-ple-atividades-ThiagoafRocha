@extends('layout')

@section('pagina-nome')
    Agendamentos - Doe Sangue!
@endsection

@section('titulo')
<h1>Agendamentos de Doações</h1>
@endsection

@section('conteudo')
    <h2 class="titulo-table-geral">Agendamentos</h2>
    <table class="table table-hover" style="background-color: #FFF">
        <thead class="thead-dark">
            <tr>
                <th>Agendamento</th>
                <th>Pessoa</th>
                <th>Local</th>
                <th>Cidade</th>
                <th>Data</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agendamentos as $agendamento)
                <tr>
                    <td>{{ $agendamento->id }}</td>
                    <td>{{ $agendamento->pessoa->nome }}</td>
                    <td>{{ $agendamento->coleta->nome }}</td>
                    <td>{{ $agendamento->coleta->cidade }}</td>
                    <td>{{ $agendamento->data }}</td>
                    <td><a href="{{ route('agendamentos.edit', $agendamento->id) }}" class="btn btn-secondary">Alterar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('agendamentos.create') }}" class="btn btn-primary">Cadastrar</a>
@endsection