<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaCorreios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correios', function (Blueprint $table) {
            $table->id();
            $table->char('cep',8);
            $table->string('logradouro',64);
            $table->string('bairro',64);
            $table->string('localidade',64);
            $table->char('uf',2);
            $table->timestamps();
            $table->index('cep');
            $table->index('logradouro');
            $table->index('bairro');
            $table->index('localidade');
            $table->index('uf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('correios', function (Blueprint $table) {
            Schema::dropIfExists('correios');
        });
    }
}
