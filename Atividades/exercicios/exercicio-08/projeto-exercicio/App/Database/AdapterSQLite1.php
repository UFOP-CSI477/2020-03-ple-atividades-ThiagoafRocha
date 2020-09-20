<?php

namespace App\Database;

use PDO;

class AdapterSQLite1 implements IAdapter
{
    public function open()
    {
        $dbfile = __DIR__ . "./db/database.sqlite";
        $dbuser = "";
        $dbpassword = "";
        $dbhost = "";

        $strConnection = "sqlite:" . $dbfile;

        $connection = new PDO($strConnection, $dbuser, $dbpassword);

        $connection->query("CREATE TABLE IF NOT EXISTS estados(id INT PRIMARY KEY, nome VARCHAR, sigla VARCHAR)");
        $connection->query("CREATE TABLE IF NOT EXISTS cidades(id INT PRIMARY KEY, nome VARCHAR)");
        $connection->query("CREATE TABLE IF NOT EXISTS produtos(id INT PRIMARY KEY, nome VARCHAR, um VARCHAR)");

        return $connection;
    }

    public function close()
    {
    }

    public function getEstados($connection)
    {
        return $connection->query("SELECT * FROM estados");
        
    }

    public function getCidades($connection)
    {
        return $connection->query("SELECT * FROM cidades");
    }

    public function getProdutos($connection)
    {
        return $connection->query("SELECT * FROM produtos");
    }
}
