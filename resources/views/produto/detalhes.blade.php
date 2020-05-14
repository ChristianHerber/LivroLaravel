@extends('principal')

@section('conteudo')
    <div class="card mt-4">
        <div class="card-header">
            <h3>Detalhes do Produto {{$p->nome}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Valor:</strong> {{$p->valor}}</p>
            <p><strong>Descrição:</strong> {{$p->descricao}}</p>
        </div>
        <div class="card-footer">
            <p><strong>Quantidade em estoque:</strong> {{$p->quantidade}}</p>
        </div>
    </div>
@endsection
