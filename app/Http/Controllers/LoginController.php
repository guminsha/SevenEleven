<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Cliente;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function verificaLogin(Request $request)
    {
        $request -> validate([
            'email' => 'required|email',
            'senha' => 'required'
            ]);
        //Executa o que tem abaixo se passar na validação \/

        if($request->logintype == "user"){
            $cliente = new Cliente;
            $cliente = $cliente->autenticarCliente($request->email, $request->senha);
            if($cliente != null)
            {
                session(['usuario' => $cliente->nome]);
                return redirect()->route('principal');
            }
            else
            {
                return redirect('/')->with('invalido', 'Login ou senha incorretos!');
            }
        } 
        else if($request->logintype == "adm"){
            $funcionario = new Funcionario; //Instanciando model
            $funcionario = $funcionario->autenticarFuncionario($request->email, $request->senha);

            if($funcionario != null)
            {
                session(['usuario' => $funcionario->nome]);
                session(['usuario_permissao' => $funcionario->nivel_permissao]);
                session(['usuario_id' => $funcionario->id_funcionario]);
                return redirect()->route('gerenciamento');
            }
            else
            {
                return redirect('/')->with('invalido', 'Login ou senha incorretos!');
            }
        }
       
    }

    public function logout(){
        session()->flush();
        return redirect()->route('paginaInicial');
    }

    public function redirecionarPagina()
    {
        return view("pagInicial");
    }
}
