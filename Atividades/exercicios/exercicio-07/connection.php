<?php

    $dbfile = "./database/database.sqlite";
    $dbuser = "";
    $dbpassword = "";
    $dbhost = "";

    $strConnection = "sqlite:" . $dbfile;

    $connection = new PDO($strConnection, $dbuser, $dbpassword);

    $connection->query("CREATE TABLE IF NOT EXISTS produtos(id INT PRIMARY KEY, nome VARCHAR, um VARCHAR)");
