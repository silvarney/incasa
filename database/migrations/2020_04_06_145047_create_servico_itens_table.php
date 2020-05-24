<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicoItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico_itens', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('nome')->nullable();
            $table->string('descricao', 500)->nullable();
            $table->string('imagem', 500)->nullable();
            $table->decimal('valor', 10, 2)->nullable();
            $table->string('status')->nullable();

            $table->integer('servico_id')->unsigned();
            $table->foreign('servico_id')->references('id')->on('servicos')->onDelete('cascade');
           
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
        Schema::dropIfExists('servico_itens');
    }
}
