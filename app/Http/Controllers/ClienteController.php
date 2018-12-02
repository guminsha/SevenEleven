<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Endereco;

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
            'pais' => 'required|not_in:"Escolher"',
            'estado' => 'required|not_in:"Escolher"',
            'cidade' => 'required|not_in:"Escolher"'
            ]);

        $cliente = new Cliente;
        $endereco = new Endereco;

        //Preenchendo model Cliente
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->data_nascimento = $request->data;
        $cliente->senha = $request->senha;
        $cliente->sexo = $request->sexo;
        $cliente->telefone = $request->telefone;
        
        //Preenchendo model Endereco
        $endereco->cep = "Cliente";
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->complemento = "Cliente";
        $endereco->pais = $request->pais;
        $endereco->save();  //Salva no banco de dados

        //Salvando cliente
        $cliente->endereco_id = $endereco->id;
        $cliente->save();   //Salva no banco de dados



        return redirect()->route('paginaInicial')->with('invalido', 'Cadastrado realizado com sucesso');
    }
}
