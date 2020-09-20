<?php

require 'connection.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$um = $_POST['um'];

if (!intval($id)){
    echo '<div><a href="produtosViewInsert.php">Voltar</a></div>';
    die('Id não é válido');
}


if(empty($nome) || empty($id) || empty($um)) {
    echo '<div><a href="produtosViewInsert.php">Voltar</a></div>';
    die('Dados não podem ser nulos');
}

try 
{
    $connection->beginTransaction();
    $stmt = $connection->prepare("INSERT INTO produtos(id, nome, um) VALUES (:i, :n, :u)");

    $stmt->bindParam(':i', $id);
    $stmt->bindParam(':n', $nome);
    $stmt->bindParam(':u', $um);
    
    $stmt->execute();

    $connection->commit();
    
    header('Location: index.php');
    exit();

} catch(Exception $e)
{
    $connection->rollBack();
    die("Erro ao inserir o produto: " . $e->getMessage());
}
