<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaEnderecosPessoas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos_pessoas', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('ordem');
            $table->unsignedBigInteger('endereco_id');
            $table->unsignedBigInteger('pessoa_id');
            $table->timestamps();
            $table->foreign('endereco_id')->references('id')->on('enderecos')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('pessoa_id')->references('id')->on('pessoas')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->index('ordem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos_pessoas');
    }
}
