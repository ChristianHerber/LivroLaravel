<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;

    # Necessário para permitir o Request::all
    # na inserção dos dados, dizendo quais os campos
    # estão liberados para gravar dados
    protected $fillable = array(
      'nome',
      'descricao',
      'valor',
      'quantidade'
    );

    # Ele é uma espécie de black-list dos valores cuja
    # atribuição você não quer permitir via massassignment.
    # Um bom caso de uso para o $guarded seria impedir que o
    # usuário altere o id de seu modelo.
    protected $guarded = ['id'];
}
