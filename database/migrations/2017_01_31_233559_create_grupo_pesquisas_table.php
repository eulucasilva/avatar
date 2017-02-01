<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoPesquisasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_pesquisas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_grupo');
            $table->text('objGeral_grupo');
            $table->text('linhaPesq_grupo');
            $table->integer('fk_sala')->unsigned();
            $table->foreign('fk_sala')->references('id')->on('salas');
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
        Schema::drop('grupo_pesquisas');
    }
}
