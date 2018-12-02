<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public $timestamps = false; /* Por padrão, Eloquent (Método: Modelo::create) espera que as colunas created_at e updated_at existam em suas tabelas. Se você não deseja que essas colunas sejam gerenciadas automaticamente pelo Eloquent, defina a propriedade $ timestamps em seu modelo como false */
    protected $table = 'enderecos'; //Nome da tabela no banco de dados
}
