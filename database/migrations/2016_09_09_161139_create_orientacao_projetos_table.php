<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrientacaoProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orientacao_projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->integer('fk_aluno')->unsigned();
            $table->foreign('fk_aluno')->references('id')->on('alunos');
            
             $table->integer('fk_projeto')->unsigned();
            $table->foreign('fk_projeto')->references('id')->on('projetos');
            
             $table->integer('fk_professor')->unsigned();
            $table->foreign('fk_professor')->references('id')->on('professors');
            
             $table->integer('fk_periodoLetivo')->unsigned();
            $table->foreign('fk_periodoLetivo')->references('id')->on('periodo_letivos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orientacao_projetos');
    }
}
