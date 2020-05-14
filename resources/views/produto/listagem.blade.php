@extends('principal')

@section('conteudo')

    @if(empty($produtos))

        <div class="alert alert-info mt-4 text-center">
            <h3>Você não tem nenhum produto cadastrado!</h3>
        </div>

    @else

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
            @foreach($produtos as $p)
            <tr class="{{$p->quantidade <= 1 ? 'bg-danger text-white' : ''}}">
                <td>{{$p->nome}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>{{$p->quantidade}}</td>
                <td><a href="/produtos/mostra/{{$p->id}}" class="btn btn-sm btn-primary">visualizar</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @endif
        <span class="badge badge-danger p-2 float-right">
            01 ou menos no estoque
        </span>
@endsection
