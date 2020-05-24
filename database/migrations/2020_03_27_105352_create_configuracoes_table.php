<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracoes', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('nome')->nullable();
            $table->string('tipo')->nullable();
            $table->boolean('status')->nullable();
            $table->decimal('valor', 10, 2)->nullable();
            $table->integer('quantidade')->nullable();
            $table->string('texto')->nullable();
            $table->date('inicio')->nullable();
            $table->date('fim')->nullable();
            $table->integer('dias')->nullable();

            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');

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
        Schema::dropIfExists('configuracoes');
    }
}
