@extends('layout')

@section('pagina-nome')
    Agendamentos - Doe Sangue!
@endsection

@section('conteudo')
    <h1>Agendamentos de Doações</h1>
    <table>
        <thead>
            <tr>
                <th>Agendamento</th>
                <th>Pessoa</th>
                <th>Local</th>
                <th>Cidade</th>
                <th>Data</th>
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