@extends('layout')

@section('pagina-nome')
    Área Principal
@endsection

@section('conteudo-principal')
<div id="principal-bg">
    <div class="row">
        <div class="col-3">    
        </div>
        <div class="rol-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/icon-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Veja como estão as suas matérias em andamento.</p>
                  <a href="{{ route("materias.index") }}" class="btn btn-success">Lista de Matérias</a>
                </div>
              </div>

        </div>
        <div class="col-3" id="card2">
            
              <div class="card" style="width: 18rem;">
                <img src="/img/icon-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Adicione uma nova matéria que esteja cursando.</p>
                  <a href="{{ route("materias.create") }}" class="btn btn-success">Incluir Matéria</a>
                </div>
              </div>
        </div>
        <div class="col-3"> 
        </div>
    </div>
    
</div>
    
@endsection