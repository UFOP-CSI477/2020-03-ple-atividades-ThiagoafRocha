@extends('layout')

@section('pagina-nome')
    Lista de Matérias
@endsection

@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Código</th>
                <th>Matéria</th>
                <th>Faltas</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
                @if ($user == $materia->user_id)
                <tr>
                    <td>{{ $materia->codigo }}</td>
                    <td>{{ $materia->nome }}</td>
                    <td>{{ $materia->faltas }}</td>
                    <td class="col-1"><a href="{{ route("materias.show", $materia->id) }}" class="btn btn-primary" onclick="verificaFaltas()">DETALHES</a></td>
                    <td class="col-1"><a href="{{ route("materias.edit",  $materia->id) }}" class="btn btn-primary">ALTERAR</a></td>
                </tr>
                @endif   
            @endforeach
            
        </tbody>
    </table>
@endsection