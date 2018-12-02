<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriandoTabelaEnderecos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() /* Esse método é chamado quando enviamos uma migração para o banco de dados */
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id_endereco');   //Chave primária
            $table->string('cep');
            $table->string('pais');
            $table->string('estado');
            $table->string('cidade');
            $table->string('complemento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() /* É chamado quando queremos desfazer a migração, ou seja, realizar um rollback. */
    {
        Schema::dropIfExists('enderecos');
    }
}
