@extends('layout.principal')

@section('conteudo')

    <div class="container mt-4 mb-4">

        {{-- exibe msgs de erro de validação --}}
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            <small>
                                {{$error}}
                            </small>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/produtos/adiciona" method="post">

            {{-- campo oculto _token necessário para envios com o método post--}}
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" class="form-control" value="{{old('nome')}}"/>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input name="descricao" class="form-control" value="{{old('descricao')}}"/>
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input name="valor" class="form-control" value="{{old('valor')}}"/>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input name="quantidade" class="form-control" type="number" value="{{old('quantidade')}}"/>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-success btn-block">Cadastrar</button>
            </div>
        </form>

    </div>

@endsection
