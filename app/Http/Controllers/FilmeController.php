<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function show()
    {
        return view('cadFilme');
    }

    public function cadastrarFilme(Request $request)
    {
        $request -> validate([
            
            'titulo' => 'required',
            'classificacao' => 'required',
            'sinopse' => 'required',
            'elenco' => 'required',
            'categoria' => 'required',
            'precoAluguel' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'precoVenda' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'disponibilidade' => 'required',
            'capaFilme' => 'required|image'
            ]);

            $extesao = $request->capaFilme->extension();
            $nomeDacapaFilme = $request->titulo;
            $request->capaFilme->storeas('public', "$nomeDacapaFilme."."$extesao");

            echo"Cadastrado Com Sucesso";
    }
}
