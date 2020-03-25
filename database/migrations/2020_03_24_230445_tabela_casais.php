<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaCasais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marido');
            $table->unsignedBigInteger('esposa');
            $table->date('dt_casamento');
            $table->unsignedTinyInteger('ativo');
            $table->timestamps();
            $table->foreign('marido')->references('id')->on('membros')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('esposa')->references('id')->on('membros')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->index('dt_casamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casais');
    }
}
