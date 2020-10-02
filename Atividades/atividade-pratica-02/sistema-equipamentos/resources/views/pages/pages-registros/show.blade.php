@extends('layout')

@section('titulo-pagina')
    Detalhes do Registro
@endsection

@section('conteudo')
    <h1 class="titulo-principal">Detalhes</h1>
    <div class="linha-detalhes">
        <div class="row">
            <p class="detalhes-bold">Equipamento: &nbsp;</p>
            <span>{{ $registro->equipamento->nome }}</span>
        </div>
        <div class="row">
            <p class="detalhes-bold">Usuário: &nbsp;</p>
            <span>{{ $registro->user->name }}</span>
        </div>
        <div class="row">
            <p class="detalhes-bold">Data Limite: &nbsp;</p>
        <span>{{ $registro->datalimite }}</span>
        </div>
        <div class="row">
            <p class="detalhes-bold">Tipo de Manutenção: &nbsp;</p>
            <span>
                @if ($registro->tipo == 1)
                    1 - Preventiva
                @endif
                @if ($registro->tipo == 2)
                    2 - Corretiva
                @endif
                @if ($registro->tipo == 3)
                    3 - Urgente
                @endif
            </span>
        </div>
        <div class="row">
            <p class="detalhes-bold">Detalhes da manutenção &nbsp;</p>
            <span>{{ $registro->descricao }}</span>
        </div>
    </div>
    <a class="btn btn-primary" href="{{ route('registros.index') }}" style="margin-top: 1em">Voltar</a>
@endsection