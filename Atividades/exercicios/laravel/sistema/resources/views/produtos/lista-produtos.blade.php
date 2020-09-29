@extends('principal')

@section('conteudo')
    <table class="table tabler-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Unidade de Medida</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($produtos as $produto)
                <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->um }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection