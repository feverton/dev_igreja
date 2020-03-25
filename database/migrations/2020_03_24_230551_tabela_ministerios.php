<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaMinisterios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministerios', function (Blueprint $table) {
            $table->id();
            $table->string('nome',128);
            $table->enum('divisao',['Sala','Grupo','Turma','Escala']);
            $table->unsignedBigInteger('ministerio_id');
            $table->timestamps();
            $table->foreign('ministerio_id')->references('id')->on('ministerios')
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
        Schema::dropIfExists('ministerios');
    }
}
