@extends('principal')

@section('conteudo')
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
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td><a href="/produtos/mostra/{{$p->id}}" class="btn btn-sm btn-primary">visualizar</a></td>
        </tr>
    <?php endforeach ?>
        </tbody>
    </table>
@endsection
