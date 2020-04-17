<?php

    namespace App\Http\Controllers;

    //chamando a classe DB para utilizae seus métodos
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

            foreach($produtos as $p){
                $html .= "<li> Nome:  {$p->nome}, Descrição:  {$p->descricao} </li>";
            }

            $html .= '</ul>';

            return $html;

        }

    }
