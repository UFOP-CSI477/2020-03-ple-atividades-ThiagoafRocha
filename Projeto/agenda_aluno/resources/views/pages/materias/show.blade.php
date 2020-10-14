@extends('layout')

@section('pagina-nome')
    Detalhes    
@endsection

@section('conteudo')
    <h2>{{$materia->codigo}}-{{ $materia->nome }}</h2>
    <div id="detalhes">
        <span>Faltas:</span>
        <span id="nfaltas">{{ $materia->faltas }} </span>
    </div>

    <h3 style="padding: 1em 0em 0em 0em">Atividades da matéria</h3>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Tipo</th>
                <th>Descricao</th>
                <th>Data de Entrega</th>
                <th>Nota</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($atividades as $atividade)
                @if ($materia->id == $atividade->materia_id)
                    <tr>
                        @if ($atividade->tipo == 1)
                            <td>Exercício</td>
                        @endif
                        @if ($atividade->tipo == 2)
                            <td>Trabalho</td>
                        @endif
                        @if ($atividade->tipo == 3)
                            <td>Prova</td>
                        @endif
                        <td>{{ $atividade->descricao }}</td>
                        <td>{{ $atividade->data_entrega }}</td>
                        <td>{{ $atividade->nota }}</td>
                        <td><a href="{{ route("atividades.edit",  $atividade->id) }}" class="btn btn-primary">ALTERAR</a></td>
                    </tr>
                @endif
            @endforeach
            
        </tbody>
    </table>
    <a href="{{ route('atividades.create') }}" class="btn btn-primary">Adicionar atividade</a>
    
@endsection