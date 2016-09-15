<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadeEnsinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividade_ensinos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ch_atividade_ensino', false, false, 45);
            

            $table->integer('fk_professor')->unsigned();
            $table->foreign('fk_professor')->references('id')-> on('professors');

            $table->integer('fk_periodo_letivo')->unsigned();
            $table->foreign('fk_periodo_letivo')->references('id')-> on('periodo_letivos');
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
        Schema::drop('atividade_ensinos');
    }
}
