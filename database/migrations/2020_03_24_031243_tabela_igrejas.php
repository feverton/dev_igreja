<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaIgrejas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igrejas', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social',128);
            $table->char('cnpj',14);
            $table->unsignedBigInteger('pessoa_id');
            $table->timestamps();
            $table->index('razao_social');
            $table->index('cnpj');
            $table->foreign('pessoa_id')->references('id')->on('pessoas')
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
        Schema::dropIfExists('igrejas');
    }
}
