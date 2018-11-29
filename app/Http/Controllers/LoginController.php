<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        if($request->email == "teste@teste.com" && $request->senha == "123")
       {
           session(['usuario' => 'Rougert']);
            return redirect()->route('principal');
       }
       else
       {
            return redirect('/')->with('invalido', true);
       }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('paginaInicial');
    }

    public function redirecionarPagina()
    {
        return view("pagInicial");
    }
}
