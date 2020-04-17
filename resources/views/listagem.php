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

        <h1 class="text-center mt-2 mb-4">Listagem de Produtos</h1>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($produtos as $p): ?>
            <tr>
                <td><?= $p->nome ?></td>
                <td><?= $p->valor ?></td>
                <td><?= $p->descricao ?></td>
                <td><?= $p->quantidade ?></td>
                <td><a href="/produtos/mostra?id=<?= $p->id ?>" class="btn btn-sm btn-primary">visualizar</a></td>
            </tr>
        <?php endforeach ?>
            </tbody>
        </table>

    </div>

</body>
</html>
