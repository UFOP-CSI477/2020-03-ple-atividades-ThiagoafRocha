<?php

namespace App\Model;

class Estado implements IModels
{

    private $id;
    private $nome;
    private $sigla;

    public function __construct($id, $nome, $sigla)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->sigla = $sigla;
    }

    public function getAll()
    {
        
    }

    public function get($id)
    {
        
    }
}