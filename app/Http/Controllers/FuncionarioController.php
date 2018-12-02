<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Endereco;

class FuncionarioController extends Controller
{
    public function show()
    {
        return view('cadFunc');
    }

    public function showGerenciamento()
    {
        return view('funcGerenciamento');
    }

    public function cadastrar(Request $request)
    {
        $request -> validate([
            
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'confirmarSenha' => 'required|same:senha',
            'dataNascimento' => 'required',
            'dataAdmissao' => 'required',
            'nivelPermissao' => 'required',
            'sexo' => 'required',
            'pais' => 'required|not_in:"Escolher"',
            'estado' => 'required|not_in:"Escolher"',
            'cidade' => 'required|not_in:"Escolher"',
            'cep' => 'required',
            'complemento' => 'required'
            ]);

        $funcionario = new Funcionario;
        $endereco = new Endereco;

        //Preenchendo model Cliente
        $funcionario->nome = $request->nome;
        $funcionario->email = $request->email;
        $funcionario->data_nascimento = $request->dataNascimento;
        $funcionario->data_admissao = $request->dataAdmissao;
        $funcionario->senha = $request->senha;
        $funcionario->sexo = $request->sexo;
        $funcionario->telefone = $request->telefone;
        $funcionario->nivel_permissao = $request->nivelPermissao;
        
        //Preenchendo model Endereco
        $endereco->cep = $request->cep;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->complemento = $request->complemento;
        $endereco->pais = $request->pais;
        $endereco->save();  //Salva no banco de dados

        //Salvando cliente
        $funcionario->endereco_id = $endereco->id;
        $funcionario->save();   //Salva no banco de dados



        return redirect()->route('gerenciamento')->with('invalido', 'Funcionário cadastrado com sucesso');
    }
}
