<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaTelefones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->id();
            $table->string('numero',16);
            $table->unsignedBigInteger('tipo_telefone_id');
            $table->unsignedBigInteger('pessoa_id');
            $table->timestamps();
            $table->foreign('tipo_telefone_id')->references('id')->on('tipos_telefones')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('pessoa_id')->references('id')->on('pessoas')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->index('numero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('telefones', function (Blueprint $table) {
            Schema::dropIfExists('telefones');
        });
    }
}
