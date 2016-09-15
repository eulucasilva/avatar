<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColegiadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegiados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_colegiado', 50);
            $table->string('sigla_colegiado', 10);
            $table->string('email_colegiado', 30);
            $table->string('campus_colegiado', 25);
           
            $table->integer('fk_coordenador')->unsigned();
            $table->foreign('fk_coordenador')->references('id')-> on('professors');

            $table->integer('fk_secretario')->unsigned();
            $table->foreign('fk_secretario')->references('id')-> on('secretarios');
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
        Schema::drop('colegiados');
    }
}
