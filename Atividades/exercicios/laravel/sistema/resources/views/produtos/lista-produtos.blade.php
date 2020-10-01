@extends('principal')

@section('conteudo')

<a href="{{ route('produtos.create') }}" class="btn btn-primary">Cadastrar</a>

    <table class="table tabler-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Unidade de Medida</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($produtos as $produto)
                <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->um }}</td>
                <td><a href="{{ route('produtos.show', $produto->id) }}">Exibir</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection