<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; //Pra poder usar DB::select e outros

class Funcionario extends Model
{
    protected $table = 'funcionarios'; //Nome da tabela no banco de dados

    public function autenticarFuncionario($email, $senha){
        $funcionario = Funcionario::where('email', $email)->where('senha', $senha)->first(); //Select com eloquent
        //$funcionario = DB::select('select * from funcionarios where email = ? and senha = ?',[$email,$senha]);   //Código SQL puro
        return $funcionario;
    }
}
