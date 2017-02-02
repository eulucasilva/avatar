<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColaboradorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('colaboradors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_colaborador');
            $table->string('email_colaborador');
            $table->string('telefone_colaborador');
            $table->string('areaatuacao_colaborador');
            $table->string(' titulacao_colaborador');
            $table->string('vinculo_colaborador');
            $table->string('datanascimento_colaborador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('colaboradors');
    }

}
