@extends('layout')

@section('titulo-pagina')
    Página Administrativa
@endsection

@section('conteudo')
   <h1 class="titulo-principal">Página Administrativa</h1>
   <div class="row">
       <div class="col-3"></div>
       <div class="col-6"><h2 id="h2-admin">Menu</h2></div>
       
   </div>
   <div class="row">
       <div class="col-3"></div>
       <div class="col-6">
        <ul class="list-admin">
            <li><a class="link-admin" href="{{ route('register') }}">Novo usuário</a></li>
            <li><a class="link-admin" href="{{ route('login') }}">Logar administrador</a></li>
            @if (Auth::check())
                <li><a class="link-admin" href="{{ route('equipamentos.index') }}">Equipamentos</a></li>
                <li><a class="link-admin" href="{{ route('registros.index') }}">Manutenções</a></li>
                <li><a class="link-admin" href="{{ route('users.index') }}">Lista de Usuários</a></li>
                <li><a class="link-admin" href="{{ route('grupo-equipamento.index') }}">Relatório de manutenções</a></li>
            @endif
        </ul>
       </div>
       <div class="col-3"></div>
   </div>
@endsection