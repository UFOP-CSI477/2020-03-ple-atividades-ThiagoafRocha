<?php

require "../vendor/autoload.php";

use App\Database\AdapterSQLite1;
use App\Database\Connection1;

//Como o bando de dados estava vazio, utilizei algumas querys manuais para inserir alguns dados
//e exclui a linha de comando.

$aux = new Connection1(new AdapterSQLite1);
$connection = $aux->getAdapter()->open();
$estados = $aux->getAdapter()->getEstados($connection);
$cidades = $aux->getAdapter()->getCidades($connection);
$produtos = $aux->getAdapter()->getProdutos($connection);

require_once "../App/View/dadosView.php";

