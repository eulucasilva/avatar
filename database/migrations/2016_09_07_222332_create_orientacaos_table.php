<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrientacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('orientacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tipo_orientacao', 30);
            $table->string('nivel_orientacao', 30);
            $table->string('ch_orientacao', 30);
            
            $table->integer('fk_periodoLetivo')->unsigned();
            $table->foreign('fk_periodoLetivo')->references('id')-> on('periodo_letivos');
            
            $table->integer('fk_professor')->unsigned();
            $table->foreign('fk_professor')->references('id')-> on('professors');
            
            $table->integer('fk_alunos')->unsigned();
            $table->foreign('fk_alunos')->references('id')-> on('alunos');
            
             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::drop('orientacaos');
    }
}
