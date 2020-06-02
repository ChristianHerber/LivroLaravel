<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Ele é executado antes mesmo da validação, portanto se o deixarmos como
     * false, ninguém vai conseguir adicionar produtos.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric'
        ];
    }

    # personalizando as mensagens de erro
    public function messages()
    {
        return [
            'required' => "O campo :attribute não pode ser vazio",
        ];
    }
}
