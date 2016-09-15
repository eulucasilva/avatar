<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_curso', 300);
            $table->string('regime_curso', 300);
            $table->string('campus_curso', 300);
            $table->string('tipo_curso', 300);
            
            $table->integer('fk_departamento')->unsigned();
            $table->foreign('fk_departamento')->references('id')-> on('departamentos');
            
            $table->integer('fk_colegiado')->unsigned();
            $table->foreign('fk_colegiado')->references('id')-> on('colegiados');
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
        Schema::drop('cursos');
    }
}
