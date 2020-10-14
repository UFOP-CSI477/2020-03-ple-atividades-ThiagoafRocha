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
    
    <div id="botao-detalhes">
        <a href="{{ route('atividades.index') }}" class="btn btn-primary" style="width: 20%">Ver atividades</a>
        <form action="{{ route('materias.destroy', $materia->id) }}" method="POST">
            @csrf
            @method("DELETE")
            <input type="submit" value="Excluir" class="btn btn-danger" style="width: 20%">
        </form>
    </div>
    
@endsection