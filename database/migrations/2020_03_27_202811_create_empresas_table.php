<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('nome')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('fone')->nullable();
            $table->string('rua')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('descricao', 1000)->nullable();
            $table->string('status')->nullable();

            $table->string('img_perfil', 500)->nullable();
            $table->string('img_perfil_arquivo', 500)->nullable();
            $table->string('img_capa', 500)->nullable();
            $table->string('img_capa_arquivo', 500)->nullable();

            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias_setor')->onDelete('cascade');

            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');

            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');

            $table->integer('bairro_id')->unsigned();
            $table->foreign('bairro_id')->references('id')->on('bairros')->onDelete('cascade');

            $table->string('pgt_dinheiro')->nullable();
            $table->string('pgt_cartao')->nullable();

            $table->decimal('pedido_minimo', 10, 2)->nullable();
            $table->decimal('pedido_maximo', 10, 2)->nullable();
            $table->string('pedido_status')->nullable();

            $table->string('proprio')->nullable();
            $table->string('externo')->nullable();
            $table->string('balcao')->nullable();

            $table->integer('criador')->nullable();

            $table->integer('anuncio')->nullable();

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
        Schema::dropIfExists('empresas');
    }
}
