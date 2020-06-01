<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/custom.css">
</head>
<body>

    <div class="container-fluid bg-dark">

        <nav class="navbar navbar-dark navbar-expand-lg">
            <a class="navbar-brand" href="#">Estoque</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{action('ProdutoController@lista')}}">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action('ProdutoController@novo')}}">Novo</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <div class="container">

        @yield('conteudo')

    </div>

    <div class="container-fluid bg-dark float-left mt-4">
        <footer class="footer text-center text-white mt-2">
            <p>&copy; Livro de Laravel da Casa do Código.</p>
            <small>Christian Heber dos Santos</small>
        </footer>
    </div>

</body>
</html>

