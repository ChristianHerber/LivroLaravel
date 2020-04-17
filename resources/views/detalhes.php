<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <div class="container">

        <div class="card mt-4">
            <div class="card-header">
                <h3><?= $p->nome ?></h3>
            </div>
            <div class="card-body">
                <p><?= $p->valor ?></p>
                <p><?= $p->descricao ?></p>
            </div>
            <div class="card-footer">
                <p><?= $p->quantidade ?></p>
            </div>
        </div>

    </div>