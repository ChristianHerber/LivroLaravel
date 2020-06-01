<?php

    namespace App\Http\Controllers;

    use Request;
    use Illuminate\Support\Facades\DB;

    class ProdutoController extends Controller{

        public function lista(){

            $html = '<h1>Listagem de Produtos com Laravel</h1>';
            $html.= '<ul>';

            /**
             * atribuindo a variável produto o retorno
             * da query feita utilizando o método "select"
             * da Classe "DB"
             */
            $produtos = DB::select('select * from produtos');

            /**
             * renderizando a view listagem.blade.php e passando a
             * variável $produtos para a view
             */
            return view('produto/listagem')->withProdutos($produtos);
            //return view('listagem')->with('produtos', array());

        }

        public function mostra($id){
            //$id = Request::route('id');

            $resposta = DB::select('select * from produtos where id = ?', [$id]);

            if(empty($resposta)){
                return "Esse Produto não existe.";
            } else {
                return view('produto/detalhes')->with('p', $resposta[0]);
            }
        }

        public function novo(){
            return view('produto.formulario');
        }

        public function adiciona(){
            $nome = Request::input('nome');
            $descricao = Request::input('descricao');
            $valor = Request::input('valor');
            $quantidade = Request::input('quantidade');

            return implode(',', array($nome,$descricao,$valor,$quantidade));
        }

    }
