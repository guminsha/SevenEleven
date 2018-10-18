<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function show()
    {
        return view('cadUser');
    } 

    public function cadastrar(Request $request)
    {
        $request -> validate([
            
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'confirmarSenha' => 'required|same:senha',
            'data' => 'required',
            'sexo' => 'required',
            'pais' => 'required',
            'estado' => 'required',
            'cidade' => 'required'
            ]);

            echo"Cadastrado Com Sucesso";
    }
}
