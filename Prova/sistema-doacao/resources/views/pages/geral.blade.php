@extends('layout')

@section('pagina-nome')
    Área Geral - Doe Sangue!
@endsection

@section('conteudo')
    <h1>Área Geral</h1>
    <h2>Ordenado por nome</h2>
    <table>
        <thead>
            <tr>
                <th>Id - Doador</th>
                <th>Doador</th>
                <th>Data</th>
                <th>Nome do Local</th>
                <th>Cidade</th>
                <th>Tipo Sanguíneo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agendamentosNome as $agendamento)
                <tr>
                    <td>{{ $agendamento->pessoa->id }}</td>
                    <td>{{ $agendamento->pessoa->nome }}</td>
                    <td>{{ $agendamento->data }}</td>
                    <td>{{ $agendamento->coleta->nome }}</td>
                    <td>{{ $agendamento->coleta->cidade }}</td>
                    <td>{{ $agendamento->pessoa->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Ordenado por Data</h2>
    <table>
        <thead>
            <tr>
                <th>Data</th>
                <th>Nome do Local</th>
                <th>Cidade</th>
                <th>Id - Doador</th>
                <th>Doador</th>
                <th>Tipo Sanguíneo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agendamentosData as $agendamento)
                <tr>
                    <td>{{ $agendamento->data }}</td>
                    <td>{{ $agendamento->coleta->nome }}</td>
                    <td>{{ $agendamento->coleta->cidade }}</td>
                    <td>{{ $agendamento->pessoa->id }}</td>
                    <td>{{ $agendamento->pessoa->nome }}</td>
                    <td>{{ $agendamento->pessoa->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection