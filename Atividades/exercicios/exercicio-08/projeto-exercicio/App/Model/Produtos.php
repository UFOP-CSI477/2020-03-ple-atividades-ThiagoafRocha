<?php

namespace App\Model;

class Produtos implements IModels
{
    private $id;
    private $nome;
    private $um;

    public function __construct($id, $nome, $um)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->um = $um;
    }

    public function getAll()
    {
        
    }

    public function get($id)
    {
        
    }

}