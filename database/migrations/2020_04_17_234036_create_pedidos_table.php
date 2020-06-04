<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('codigo')->nullable();

            $table->decimal('valor', 10, 2)->nullable();

            $table->decimal('valor_total', 10, 2)->nullable();

            $table->integer('quantidade')->nullable();

            $table->string('observacao', 500)->nullable();

            $table->string('status')->nullable();

            $table->string('forma_pagamento')->nullable();

            $table->string('tipo_entrega')->nullable();

            $table->decimal('classificacao', 10, 1)->nullable();

            $table->decimal('taxa_pedido', 10, 2)->nullable();
            $table->string('taxa_pedido_status')->nullable();

            $table->decimal('taxa_entregador', 10, 2)->nullable();
            $table->string('taxa_entregador_status')->nullable();

            $table->string('solicitacao')->nullable();
            $table->string('solicitacao_hora')->nullable();

            $table->string('aceitacao')->nullable();
            $table->string('aceitacao_hora')->nullable();
            $table->date('aceitacao_data')->nullable();

            $table->string('liberacao')->nullable();
            $table->string('liberacao_hora')->nullable();

            $table->string('entrega')->nullable();
            $table->string('entrega_hora')->nullable();

            $table->string('cancelado')->nullable();
            $table->string('cancelado_hora')->nullable();
            $table->string('cancelado_autor')->nullable();

            $table->integer('desconto_id')->unsigned();
            $table->foreign('desconto_id')->references('id')->on('empresa_descontos')->onDelete('cascade');

            $table->integer('taxa_id')->unsigned();
            $table->foreign('taxa_id')->references('id')->on('empresa_taxas')->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('usuario_enderecos')->onDelete('cascade');

            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');

            $table->integer('entregador_id')->unsigned();
            $table->foreign('entregador_id')->references('id')->on('entregador')->onDelete('cascade');

            $table->string('lote')->nullable();
            
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
        Schema::dropIfExists('pedidos');
    }
}
