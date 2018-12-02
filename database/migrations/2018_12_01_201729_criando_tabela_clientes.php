<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriandoTabelaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('nome');
            $table->string('email');
            $table->string('senha');
            $table->date('data_nascimento');
            $table->char('sexo', 1);
            $table->string('telefone')->nullable();
            $table->boolean('conta_vip')->default(false);
            $table->integer('endereco_id')->unsigned(); //Unsigned = Números positivos
            $table->foreign('endereco_id')->references('id_endereco')->on('enderecos');
            $table->integer('vip_id')->unsigned()->nullable(); //Unsigned = Números positivos
            $table->foreign('vip_id')->references('id_vip')->on('vips');
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
        Schema::dropIfExists('clientes');
    }
}
