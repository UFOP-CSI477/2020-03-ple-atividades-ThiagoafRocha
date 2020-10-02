@extends('layout')

@section('titulo-pagina')
    Detalhes do Equipamento
@endsection

@section('conteudo')
    <h1 class="titulo-principal">Detalhes</h1>
    <div class="row linha-detalhes">
        <p class="detalhes-bold">Equipamento: &nbsp;</p>
        <span>{{ $equipamento->nome }}</span>
    </div>
    
    <a class="btn btn-primary" href="{{ route('equipamentos.index') }}" style="margin-top: 1em">Voltar</a>

@endsection