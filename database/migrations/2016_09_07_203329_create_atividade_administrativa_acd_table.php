<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadeAdministrativaAcdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('atividade_administrativa_acds', function (Blueprint $table) 
        {        
            $table->increments('id');
            $table->timestamps();

            $table->string('tipo_participacao_atividade_administrativa_acd', 45);
            $table->integer('ch_participacao_atividade_administrativa_acd', false, false, 45);
            

            $table->integer('fk_professor')->unsigned();
            $table->foreign('fk_professor')->references('id')-> on('professors');

            $table->integer('fk_periodo_letivo')->unsigned();
            $table->foreign('fk_periodo_letivo')->references('id')-> on('periodo_letivos');
        });
    }
    public function down()
    {
        Schema::drop('atividade_administrativa_acds');
    }
}
