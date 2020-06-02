<?php

    namespace App\Http\Controllers;

    use App\Produto;
    use Request;
    use App\Http\Requests\ProdutosRequest;


    class ProdutoController extends Controller{

        public function lista(){

            $html = '<h1>Listagem de Produtos com Laravel</h1>';
            $html.= '<ul>';

            /**
             * atribuindo a variável produto o retorno
             * da query feita utilizando o método "select"
             * da Classe "DB"
             */
            //$produtos = DB::select('select * from produtos');

            /**
             * Fazendo a query com o Eloquent
             */
             $produtos = Produto::all();

            /**
             * renderizando a view listagem.blade.php e passando a
             * variável $produtos para a view
             */
            return view('produto/listagem')->withProdutos($produtos);
            //return view('listagem')->with('produtos', array());

        }

        public function mostra($id){
            //$id = Request::route('id');
            //$produto = DB::select('select * from produtos where id = ?', [$id]);

            $produto = Produto::find($id);

            if(empty($produto)){
                return "Esse Produto não existe.";
            }

            return view('produto/detalhes')->with('p', $produto);
        }

        public function novo(){
            return view('produto.formulario');
        }

        public function adiciona(ProdutosRequest $request){

        //códigos não utilizados, foram dimplificados

            //$nome = Request::input('nome');
            //$descricao = Request::input('descricao');
            //$valor = Request::input('valor');
            //$quantidade = Request::input('quantidade');

            //return implode(',', array($nome,$descricao,$valor,$quantidade));

            /**
             * Inserindo os dados no banco com DB::insert
             */
            //DB::insert(
            //    'insert into produtos (nome,quantidade,valor,descricao) values (?,?,?,?)',
            //    array($nome,$quantidade,$valor,$descricao)
            //);

            /**
             * inserindo dados no banco com DB::table
             */
            //DB::table('produtos')->insert(
            //    [
            //        'nome' => $nome,
            //        'quantidade' => $quantidade,
            //        'valor' => $valor,
            //        'descricao' => $descricao
            //    ]
            //);

            //return view('produto.adicionado')->with('nome',$nome);

            /**************************************
             * Inserirndo no banco com o Eloquent
             **************************************/
            # criando uma nova instancia de Produto()
            //$produto = new Produto();

            # pegando os valores inseridos os campos do formulário um por um
            //$produto->nome = Request::input('nome');
            //$produto->valor = Request::input('valor');
            //$produto->descricao = Request::input('descricao');
            //$produto->quantidade = Request::input('quantidade');

            # passando um array
            //$params = Request::all();
            # recebendo os valores do array no objeto
            //$produto = new Produto($params);

            # gravando os registros
            //$produto->save();

        //  códigos não utilizados, foram dimplificados

            # simplificando ainda mais a inserção de dados
            # utilizando o factory method create
            Produto::create($request->all());

            /**
             * redirecionando para a listagem de produtos
             * após a inserção de registro no banco de dados
             */
            return redirect()
                ->action('ProdutoController@lista')
                ->withInput(Request::only('nome'));
        }

        public function listaJson(){
            //$produtos = DB::select('select * from produtos');
            $produtos = Produto::all();
            return response()->json($produtos);
        }

        public function remove($id){

            $produto = Produto::find($id);
            $produto->delete();

            return redirect()->action('ProdutoController@lista');

        }

        public function altera($id){
            return redirect()->action('ProdutoController@lista');
        }

    }
