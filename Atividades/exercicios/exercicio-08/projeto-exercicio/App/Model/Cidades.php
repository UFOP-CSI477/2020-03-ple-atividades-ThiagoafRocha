<?php

namespace App\Model;

class Cidades implements IModels
{

    private $id;
    private $nome;

    public function __construct($id, $nome)
    {
        $this->id = $id;
        $this->nome  = $nome;  
    }

    public function getAll()
    {
        
    }

    public function get($id)
    {
        
    }
}