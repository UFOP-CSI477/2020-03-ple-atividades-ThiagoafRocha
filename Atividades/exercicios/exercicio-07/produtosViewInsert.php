<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 style="padding: 1em; text-align: center;">Insira um produto</h1>
        <form action="produtosControllerInsert.php" method="POST" onsubmit="return validacoes()">
            <div class="form-group">
                <div class="row">
                    <div class="col-1">
                        <label for="id">Id: </label>
                        <input type="text" name="id" id="id" class="form-control" style="width: 40px;">
                    </div>
                    <div class="col-6">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" class="form-control" id="nome">
                    </div>
                    <div class="col-5">
                        <label for="um">Unidade de medida: </label>
                        <input type="text" name="um" class="form-control" id="um">
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Inserir">
        </form>

       
    </div>

    <script src="js/valida.js"></script>
</body>

</html>