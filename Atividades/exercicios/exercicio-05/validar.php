<?php

    $nome = $_POST["campoNome"];
    $cpf = $_POST["campoCpf"];
    $data_nasc = $_POST["campoData"];
    $endereco = $_POST["campoEndereco"];
    $telefone = $_POST["campoTel"];
    $email = $_POST["campoEmail"];
    $nomeUsuario = $_POST["campoUser"];
    $senha = $_POST["campoSenha"];

    echo "<h1>Dados aceitos pelo banco de dados</h1>";
    $texto = "Nome completo: $nome \n CPF: $cpf \n Data de nascimento: $data_nasc \n Endereço: $endereco \n Telefone: $telefone \n E-mail: $email \n Nome de usuário: $nomeUsuario \n Senha: $senha";

    echo nl2br($texto);