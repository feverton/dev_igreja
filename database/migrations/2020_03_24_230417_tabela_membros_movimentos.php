<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaMembrosMovimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros_movimentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('membro_id');
            $table->enum('tipo',['Entrada','Saída']);
            $table->date('data');
            $table->timestamps();
            $table->foreign('membro_id')->references('id')->on('membros')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membros_movimentos');
    }
}
