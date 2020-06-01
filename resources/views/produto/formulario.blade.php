@extends('layout.principal')

@section('conteudo')

    <div class="container mt-4 mb-4">

        <form action="/produtos/adiciona">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input name="descricao" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input name="valor" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input name="quantidade" class="form-control" type="number"/>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-success btn-block">Cadastrar</button>
            </div>
        </form>

    </div>

@endsection
