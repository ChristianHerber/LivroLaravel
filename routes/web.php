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

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id','[0-9]+');
