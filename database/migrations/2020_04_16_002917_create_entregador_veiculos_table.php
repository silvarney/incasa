<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregadorVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregador_veiculos', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('status')->nullable();

            $table->string('veiculo_tipo')->nullable();
            $table->string('veiculo_marca')->nullable();
            $table->string('veiculo_modelo')->nullable();
            $table->string('veiculo_ano')->nullable();
            $table->string('veiculo_cor')->nullable();
            $table->string('veiculo_extensao')->nullable();

            $table->string('img_documento', 500)->nullable();
            $table->string('img_veiculo', 500)->nullable();

            $table->integer('entregador_id')->unsigned();
            $table->foreign('entregador_id')->references('id')->on('entregador')->onDelete('cascade');

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
        Schema::dropIfExists('entregador_veiculos');
    }
}
