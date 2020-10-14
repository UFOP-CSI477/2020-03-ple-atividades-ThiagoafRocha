@extends('layout')

@section('pagina-nome')
    Lista de Atividades
@endsection

@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Tipo</th>
                <th>Descricao</th>
                <th>Data de Entrega</th>
                <th>Nota</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($atividades as $atividade)
                <tr>
                    <td>{{ $atividade->id }}</td>
                    <td>{{ $atividade->tipo }}</td>
                    <td>{{ $atividade->descricao }}</td>
                    <td>{{ $atividade->data_entrega }}</td>
                    <td>{{ $atividade->nota }}</td>
                    <td><a href="{{ route("atividades.edit",  $atividade->id) }}" class="btn btn-primary">ALTERAR</a></td>
                </tr>
            @endforeach
            
        </tbody>
    </table>

    <a href="{{ route('atividades.create') }}" class="btn btn-primary">Adicionar atividade</a>
@endsection