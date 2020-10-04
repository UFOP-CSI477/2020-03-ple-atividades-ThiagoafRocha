@extends('layout')

@section('pagina-nome')
    Pagina Principal - Doe Sangue!
@endsection

@section('titulo')
<h1>Página Principal</h1>
@endsection

@section('conteudo')
    <div class="row">
        <div id="conteudo-principal-1">
            <p id="principal-p-1">Doe sangue e salve mais de uma vida!</p>
        </div>
    </div>
    <div class="row">
        <div class="" id="conteudo-principal-2">
            <p id="principal-p-2">Confira nesta tabela quais tipos de sangue são compatíveis com o seu! </p>
        </div>
    </div>
    
@endsection

@section('conteudo-nav')
<ul class="nav flex-column" id="nav-menu" >
    <h2>Links Úteis</h2>
    <li class="nav-item">
      <a class="nav-link active" href="https://portal.fiocruz.br/noticia/mitos-e-verdades-sobre-doacao-de-sangue" id="nav-link-1"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://portal.fiocruz.br/noticia/conheca-os-requisitos-necessarios-para-doacao-de-sangue" id="nav-link-2"></a>
    </li>
  </ul>
@endsection