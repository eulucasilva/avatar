<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrequenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('horaentrada_frequencia');
            $table->string('horasainda_frequencia');
            $table->string('status_frequencia');
            $table->integer('fk_funcionario')->unsigned();
            $table->foreign('fk_funcionario')->references('id')->on('funcionarios');
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
        Schema::drop('frequencias');
    }
}
