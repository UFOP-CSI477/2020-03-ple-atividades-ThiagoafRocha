<?php

namespace App\Database;

interface IAdapter
{
    public function open();
    public function close();
    public function getEstados($connection);
    public function getCidades($connection);
    public function getProdutos($connection);
}