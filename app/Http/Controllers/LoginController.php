<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;

use Auth;

class LoginController extends Controller
{
    public function login(Request $req){
        $credenciais = $req->only('email','password');

        if(Auth::attempt($credenciais)){
            return "Usuário ". Auth::user()->name ." logado com sucesso!";
        }

        return "Login inválido.";
    }
}
