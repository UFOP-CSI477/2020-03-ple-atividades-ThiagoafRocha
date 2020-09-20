<?php

namespace App\Model;

interface IModels
{
    public function getAll();
    public function get($id);
}