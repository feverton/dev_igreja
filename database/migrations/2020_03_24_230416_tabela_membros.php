<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaMembros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->date('nascimento');
            $table->unsignedTinyInteger('sexo');
            $table->unsignedTinyInteger('ativo');
            $table->unsignedBigInteger('pessoa_id');
            $table->unsignedBigInteger('igreja_id');
            $table->timestamps();
            $table->foreign('pessoa_id')->references('id')->on('pessoas')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('igreja_id')->references('id')->on('igrejas')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->index('nascimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membros');
    }
}
