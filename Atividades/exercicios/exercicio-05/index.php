<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="cadastrar.js"></script>
</head>

<body>
    <div class="container">
        <h1 id="titulo-index">Cadastro</h1>
        <form name="formCad" method="POST" action="validar.php" onsubmit="return cadastrar()">
            <div class="form-group">
              <label for="campoNome">Nome completo</label>
              <input type="text" name="campoNome" class="form-control" id="campoNome" placeholder="Insira o nome completo">
            </div>
            <div class="form-group">
              <label for="campoCPF">Numero de CPF</label>
              <input type="text" name="campoCPF" class="form-control" id="campoCPF" placeholder="Numero de CPF">
            </div>
            <div class="form-group">
                <label for="campoData">Data de nascimento</label>
                <input type="date" name="campoData" class="form-control" id="campoData" placeholder="">
            </div>
            <div class="form-group">
                <label for="campoEndereco">Endereço completo</label>
                <input type="text" name="campoEndereco" class="form-control" id="campoEndereco" placeholder="Insira o endereço completo">
            </div>
            <div class="form-group">
                <label for="campoTel">Número de telefone</label>
                <input type="tel" name="campoTel" class="form-control" id="campoTel" placeholder="Insira número de telefone">
            </div>
            <div class="form-group">
                <label for="campoEmail">E-mail</label>
                <input type="email" name="campoEmail" class="form-control" id="campoEmail" placeholder="Insira seu e-mail">
            </div>
            <div class="form-group">
                <label for="campoUser">Nome de usuário</label>
                <input type="text" name="campoUser" class="form-control" id="campoUser" placeholder="">
            </div>
            <div class="form-group">
                <label for="campoSenha">Senha</label>
                <input type="password" name="campoSenha" class="form-control" id="campoSenha" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>
          </form>
          
    </div>
</body>

<footer>

</footer>

</html>