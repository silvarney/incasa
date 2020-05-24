<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasSetorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_setor', function (Blueprint $table) {
            $table->Increments('id');
            
            $table->string('nome')->nullable();
            $table->string('tipo')->nullable();
            $table->integer('setor')->nullable();
            $table->string('status')->nullable();
            
            $table->string('imagem', 500)->nullable();

            $table->string('autor')->nullable();

            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');
            
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
        Schema::dropIfExists('categorias_setor');
    }
}
