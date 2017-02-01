<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposAreas extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('grupo_area', function (Blueprint $table) {
            $table->integer('fk_area')->unsigned();
            $table->foreign('fk_area')->references('id')->on('areade_atuacaos');
            $table->integer('fk_grupo')->unsigned();
            $table->foreign('fk_grupo')->references('id')->on('grupo_pesquisas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('grupo_area');
    }

}
