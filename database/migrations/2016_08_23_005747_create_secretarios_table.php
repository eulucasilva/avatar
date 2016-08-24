<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('secretarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('matricula_secretario', 45);
            $table->date('inicio_mandato_secretario');
            $table->date('termino_mandato_secretario');
            $table->string('nome_secretario', 45);
            $table->string('telefone_secretario', 15);
            $table->string('endereco_secretario', 100);
           
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
       Schema::drop('secretarios');
    }
}
