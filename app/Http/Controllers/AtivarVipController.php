<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;

class AtivarVipController extends Controller
{
    public function showPlanos()
    {
        return view('planosVip');
    } 

    public function showEfetuado()
    {
        echo "Compra efetuada! Enviaremos um e-mail com mais informações.";
    }

    public function showPagamento(Request $request)
    {
        $informacoesPlano = new Pagamento;
        $informacoesPlano->descricao = $request->plano;
        if($request->desconto != null)
        {
            $informacoesPlano->desconto = $request->desconto;
        }
        else
        {
            $informacoesPlano->desconto = 0.00;
        }
              
        if($request->plano == 'Plano Bronze !')
        {
            $dados['tipoParcelas'] = array("R$9,99 em 1x","R$4,99 em 2x","R$3,33 em 3x");
            $informacoesPlano->preco_unitario = 9.99;
        }
        else if($request->plano == 'Plano Prata !')
        {
            $dados['tipoParcelas'] = array("R$26,37 em 1x","R$13,18 em 2x","R$8,79 em 3x");
            $informacoesPlano->preco_unitario = 26.37;
        }
        else if($request->plano == 'Plano Ouro !')
        {
            $dados['tipoParcelas'] = array("R$43,74 em 1x","R$21,87 em 2x","R$14,58 em 3x");
            $informacoesPlano->preco_unitario = 43.74;
        }
        else
        {
            $dados['tipoParcelas'] = array("R$77,88 em 1x","R$38,94 em 2x","R$25,96 em 3x");
            $informacoesPlano->preco_unitario = 77.88;
        }
        $informacoesPlano->preco_final = $informacoesPlano->preco_unitario - $informacoesPlano->desconto;
        return view('pagamentoVip', $dados, ['infoPlano'=>$informacoesPlano]);
    }
}
