<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicidadePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidade_pagamentos', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('codigo')->nullable();
            $table->string('tipo')->nullable();
            $table->decimal('valor', 10, 2)->nullable();
            $table->date('inicio')->nullable();
            $table->date('fim')->nullable();
            $table->integer('dias')->nullable();
            $table->integer('status')->nullable();

            $table->integer('tela_id')->unsigned();
            $table->foreign('tela_id')->references('id')->on('telas')->onDelete('cascade');

            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');

            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('publicidade_pagamentos');
    }
}
