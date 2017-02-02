<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula');
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('areaDeAtuacao');
            $table->string('titulacao');
            $table->string('classe');
            $table->string('regimeDeTrabalho');
            $table->string('tipoVincluo');
            $table->date('dataNasc');
            $table->integer('fk_departamento')->unsigned();
            $table->foreign('fk_departamento')->references('id')-> on('departamentos');
            $table->integer('fk_curso')->unsigned();
            $table->foreign('fk_curso')->references('id')-> on('cursos');
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
        Schema::drop('professors');
    }
}
