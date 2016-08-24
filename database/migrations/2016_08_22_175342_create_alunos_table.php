<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('matricula_aluno', 11);
            $table->integer('ano_ingresso_aluno');
            $table->string('nome_aluno', 100);
            $table->string('endereco_aluno', 100);
            $table->string('telefone_aluno', 15);
            $table->string('email_aluno', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('alunos');
    }
}
