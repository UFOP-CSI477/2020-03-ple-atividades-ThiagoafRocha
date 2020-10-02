@extends('layout')

@section('titulo-pagina')
    Lista de Menutenções
@endsection

@section('conteudo')
<h1 class="titulo-principal">Equipamentos em manutenção</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Equipamento</th>
            <th scope="col">Manutenções</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($equipamentos as $equipamento)
            <tr>
                <td>{{ $equipamento->nome }}</td>
                <td>
                @foreach ($registros as $registro)
                    @if ($registro->equipamento->nome == $equipamento->nome)
                        {{ $registro->descricao }};
                    @endif
                @endforeach
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    
@endsection