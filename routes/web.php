<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return '<h1>Primeira lógica com Laravel</h1>';
});

/**
 * Rota que executa o método/função lista()
 * do Controller ProdutoController em pp\Http\Controllers
 */
Route::get('/produtos', 'ProdutoController@lista');

Route::get(
    '/produtos/mostra/{id}', //rota
    'ProdutoController@mostra' //Controller e @metodo
    )
    ->where('id','[0-9]+'); //id tem que ser numerico

Route::get('/produtos/novo','ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::get('produtos/altera/{id}', 'ProdutoController@altera');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
