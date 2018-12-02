<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriandoTabelaFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id_funcionario');
            $table->string('nome');
            $table->string('email');
            $table->string('senha');
            $table->date('data_nascimento');
            $table->date('data_admissao');
            $table->char('nivel_permissao', 1);
            $table->char('sexo', 1);
            $table->string('telefone');
            $table->integer('endereco_id')->unsigned(); //Unsigned = Números positivos
            $table->foreign('endereco_id')->references('id_endereco')->on('enderecos');
            $table->timestamps();  //Cria as colunas: Created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
