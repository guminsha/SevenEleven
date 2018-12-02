<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

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
            'categoria' => 'required|not_in:"Escolher"',
            'precoAluguel' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'precoVenda' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'disponibilidade' => 'required',
            'capaFilme' => 'required|image',
            'uploadFilme' => 'required'
            ]);

            $extesao = $request->capaFilme->extension();
            $nomeDacapaFilme = $request->titulo;
            $request->capaFilme->storeas('public', "$nomeDacapaFilme."."$extesao");

            $filme = new Filme;

            $filme->titulo = $request->titulo;
            $filme->classificacao = $request->classificacao;
            $filme->sinopse = $request->sinopse;
            $filme->elenco = $request->elenco;
            $filme->categoria = $request->categoria;
            $filme->preco_aluguel = $request->precoAluguel;
            $filme->preco_venda = $request->precoVenda;
            $filme->disponibilidade = $request->disponibilidade;
            $filme->capa_filme = $request->capaFilme;
            $filme->upload = $request->uploadFilme;
            $filme->funcionario_id = session('usuario_id');
            $filme->save();

            return redirect()->route('gerenciamento')->with('invalido', 'Filme cadastrado com sucesso');
    }
}
