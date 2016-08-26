<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordenacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('coordenacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tipo_coordenacao', 45);
            $table->string('portaria_nomeacao_coordenacao', 45);
            $table->date('inicio_mandato_coordenacao');
            $table->date('termino_mandato_coordenacao');

            $table->integer('fk_professor')->unsigned();
            $table->foreign('fk_professor')->references('id')-> on('professors');

            $table->integer('fk_usuario')->unsigned();
            $table->foreign('fk_usuario')->references('id')-> on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('coordenacaos');
    }
}
