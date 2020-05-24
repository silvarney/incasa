<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregador', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('status')->nullable();
            
            $table->string('identidade')->nullable();

            $table->string('cnh_registro')->nullable();
            $table->string('cnh_categoria')->nullable();
            $table->string('cnh_validade')->nullable();
            $table->string('cnh_estado')->nullable();
            
            $table->string('img_cnh', 500)->nullable();
            
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
        Schema::dropIfExists('entregador');
    }
}
