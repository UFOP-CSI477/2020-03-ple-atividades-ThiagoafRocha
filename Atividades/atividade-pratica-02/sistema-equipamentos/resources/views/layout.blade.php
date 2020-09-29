<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo-pagina')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/nav-layout.css')}} ">
    <link rel="stylesheet" href="{{ asset('css/body-layout.css') }} ">
</head>
<body>
    <header>
        <ul>
            <li><a href="\" class="active">Home</a></li>
            <li><a href="#">Área...</a></li>
            <li><a href="area/administrativa">Área administrativa</a></li>
            <li style="float:right"><a href="#">Login</a></li>
            <li style="float:right"><a href="#">Cadastrar</a></li>
        </ul> 
    </header>
    <div class="container">
        @yield('conteudo')
    </div>

    <footer></footer>
</body>
</html>