<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados e Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 style="padding: 1em; text-align: center;">Tabelas</h1>
        <h2>Tabela de Estados</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sigla</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($e = $estados->fetch()) {
                    echo "<tr><td>" . $e["id"] . "</td><td>" . $e["nome"] . "</td><td>" . $e["sigla"] . " </td></tr>";
                }
                ?>
            </tbody>
        </table>

        <h2 style="padding-top: 1em;">Tabela de Produtos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Medida</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($e = $produtos->fetch()) {
                    echo "<tr><td>" . $e["id"] . "</td><td>" . $e["nome"] . "</td><td>" . $e["um"] . "</td></tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>