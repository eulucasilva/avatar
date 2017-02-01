<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_salas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('objetivo_reserva');
            $table->dateTime('horaInicio_reserva');
            $table->dateTime('horaFim_reserva');
            $table->dateTime('data_reserva');
            $table->integer('fk_sala')->unsigned();
            $table->foreign('fk_sala')->references('id')->on('salas');
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
        Schema::drop('reserva_salas');
    }
}
