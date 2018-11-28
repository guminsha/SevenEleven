<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtivarVipController extends Controller
{
    public function showPlanos()
    {
        return view('planosVip');
    } 

    public function showPagamento()
    {
        return view('pagamentoVip');
    }
}
