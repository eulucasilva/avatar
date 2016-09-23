<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create
       (
            'turmas', function(Blueprint $table)
            {
                $table -> increments('id');
                $table -> timestamps();

                $table -> integer('fk_solicitacao') -> unsigned();
                $table -> foreign('fk_solicitacao') -> references('id') -> on('solicitacaos');

                $table -> integer('fk_professor') -> unsigned();
                $table -> foreign('fk_professor') -> references('id') -> on('professors');

                $table -> integer('ch_semestral_turma');
                $table -> integer('ch_semanal_turma');
                
                $table -> string('local_turma') -> nullable();
                $table -> string('tipo_turma');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('turmas');
    }
}
