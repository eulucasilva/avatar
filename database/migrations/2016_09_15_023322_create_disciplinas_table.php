<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_disciplina', 100);
            $table->string('codigo_disciplina', 6);
            $table->integer('ch_total_disciplina');
            $table->string('natureza_disciplina', 100);
            $table->integer('creditacao_estagio');
            $table->integer('creditacao_pratica');
            $table->integer('creditacao_teorica');
            $table->integer('fk_area')->unsigned();
            $table->foreign('fk_area')->references('id')-> on('areas');
            $table->integer('fk_departamento')->unsigned();
            $table->foreign('fk_departamento')->references('id')-> on('departamentos');
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
        Schema::drop('disciplinas');
    }
}
