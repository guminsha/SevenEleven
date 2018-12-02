<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; //Pra poder usar DB::select e outros

class Cliente extends Model
{
    public function autenticarCliente($email, $senha){
        $cliente = Cliente::where('email', $email)->where('senha', $senha)->first(); //Select com eloquent
        //$cliente = DB::select('select * from clientes where email = ? and senha = ?',[$email,$senha]);   //Código SQL puro
        return $cliente;
    }
}
