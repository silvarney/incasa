<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentoTaxasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento_taxas', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('codigo')->nullable();
            $table->decimal('valor', 10, 2)->nullable();
            $table->string('status')->nullable();
            $table->string('wirecard_id')->nullable();
            $table->string('wirecard_data')->nullable();

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
        Schema::dropIfExists('pagamento_taxas');
    }
}
