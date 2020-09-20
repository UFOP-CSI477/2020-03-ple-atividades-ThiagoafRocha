<?php

namespace App\Database;

use App\Database\IAdapter;

class Connection1
{
    private $adapter;

    public function __construct(IAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getAdapter()
    {
        return $this->adapter;
    }
}