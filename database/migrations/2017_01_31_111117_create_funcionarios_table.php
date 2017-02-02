<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome_funcionario', 45);
            $table->string('telefone_funcionario', 11);
            $table->date('datanasc_funcionario', 8);
            $table->date('dataadmissao_funcionario', 8);
            $table->string('grauinstrucao_funcionario', 45);
            $table->string('formacao_funcionario', 45);
            $table->string('funcao_funcionario', 45);
            $table->string('horarioinicio_funcionario', 5);
            $table->string('horariofim_funcionario', 5);
             
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcionarios');
    }
}
