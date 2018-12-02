<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriandoTabelaFilmes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->increments('id_filme');
            $table->string('titulo');
            $table->string('classificacao');
            $table->text('sinopse');
            $table->text('elenco');
            $table->string('categoria');
            $table->float('preco_aluguel', 4, 2);
            $table->float('preco_venda', 4, 2);
            $table->boolean('disponibilidade');
            $table->binary('capa_filme')->nullable;
            $table->binary('upload')->nullable;
            $table->integer('funcionario_id')->unsigned(); //Unsigned = Números positivos
            $table->foreign('funcionario_id')->references('id_funcionario')->on('funcionarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmes');
    }
}
