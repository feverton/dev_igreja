<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaFilhos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filhos', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo',['Pai','Mãe']);
            $table->unsignedBigInteger('progenitor');
            $table->unsignedBigInteger('filho');
            $table->timestamps();
            $table->foreign('progenitor')->references('id')->on('membros')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('filho')->references('id')->on('membros')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->index('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filhos');
    }
}
