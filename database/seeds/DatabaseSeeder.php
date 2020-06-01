<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call('ProdutoTableSeeder');
    }
}

class ProdutoTableSeeder extends Seeder
{
    public function run()
    {
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array('Geladeira', 5, 900.00, 'Com gelo na porta'));
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array('TV', 12, 898.00, '70 Polegadas'));
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array('Fogão', 9, 545.00, 'Painel automático e forno elétrico'));
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array('Guarda-roupas', 1, 850.00, '6 portas marfim'));
    }
}
