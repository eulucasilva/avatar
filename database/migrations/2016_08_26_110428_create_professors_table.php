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
         Schema::create('professors', function (Blueprint $table) 
         {
            $table->increments('id');
            $table->timestamps();
            $table->string('matricula_professor', 11);
            $table->string('situacao_professor', 15);
            $table->string('regime_trabalho_professor', 10);
            $table->integer('ch_professor');
            $table->date('inicio_contrato_professor');
            $table->date('termino_contrato_professor');
            $table->string('contrato_professor', 15);
            $table->string('classe_professor', 45);
            $table->string('titulo_professor', 45);
            $table->string('email_professor', 30);
            $table->string('nome_professor', 100);
            $table->string('telefone_professor', 15);
            $table->string('endereco_professor', 100);
            $table->integer('fk_usuario')->unsigned();
            $table->foreign('fk_usuario')->references('id')-> on('users');
            $table->integer('fk_area')->unsigned();
            $table->foreign('fk_area')->references('id')-> on('areas');
            $table->integer('fk_departamento')->unsigned();
            $table->foreign('fk_departamento')->references('id')-> on('departamentos');

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
