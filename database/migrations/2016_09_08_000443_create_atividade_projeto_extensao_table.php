<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadeProjetoExtensaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('atividade_projeto_extensaos', function (Blueprint $table) 
        {        
            $table->increments('id');
            $table->timestamps();

            $table->string('tipo_part_prof_atividade_projeto_extensao', 45);
            $table->integer('ch_total_atividade_projeto_extensao', false, false, 45);
            

            $table->integer('fk_professor')->unsigned();
            $table->foreign('fk_professor')->references('id')-> on('professors');

            $table->integer('fk_periodo_letivo')->unsigned();
            $table->foreign('fk_periodo_letivo')->references('id')-> on('periodo_letivos');
        });
    }
    public function down()
    {
        Schema::drop('atividade_projeto_extensaos');
    }
}
