<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicidadeConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidade_conteudos', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('tela')->nullable();

            $table->string('imagem', 500)->nullable();

            $table->string('link', 500)->nullable();

            $table->integer('tela_id')->unsigned();
            $table->foreign('tela_id')->references('id')->on('telas')->onDelete('cascade');
            
            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');

            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias_setor')->onDelete('cascade');

            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');

            $table->integer('pagamento_id')->unsigned();
            $table->foreign('pagamento_id')->references('id')->on('publicidade_pagamentos')->onDelete('cascade');

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
        Schema::dropIfExists('publicidade_conteudos');
    }
}
