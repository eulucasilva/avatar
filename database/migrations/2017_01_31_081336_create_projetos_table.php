<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('fk_professor')->unsigned();
            $table->foreign('fk_professor')->references('id')-> on('professors');
            $table->string('objetivoEspc');
            $table->string('resultadosEsperados');
            $table->string('financiamento');
            $table->string('fonteFinanciamento');
            $table->string('tipoPesquisa');
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
        Schema::drop('projetos');
    }
}
