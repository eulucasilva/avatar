<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pits', function (Blueprint $table) {
            $table->increments('id');            
            
            $table->integer('fk_periodoLetivo')->unsigned();
            $table->foreign('fk_periodoLetivo')->references('id')->on('periodo_letivos');
            
            $table->integer('fk_professor')->unsigned();
            $table->foreign('fk_professor')->references('id')->on('professors');
                       
            $table->integer('campo1');
            $table->integer('campo2');
            $table->integer('campo3');
            $table->integer('campo4');
            $table->integer('campo5');
            $table->integer('campo6');
            $table->integer('campo7');
            $table->integer('campo8');
            $table->integer('campo9');
            $table->integer('campo10');
            $table->integer('campo11');
            $table->integer('campo12');
            $table->integer('campo13');
            $table->integer('campo14');
            $table->integer('campo15');
            $table->integer('campo16');
            $table->integer('campo17');
            $table->integer('campo18');
            $table->integer('campo19');
            $table->integer('campo20');
            $table->integer('campo21');
            $table->integer('campo22');
            $table->integer('campo23');
            $table->integer('campo24');
            $table->integer('campo25');
            $table->integer('campo26');
            $table->integer('campo27');
            $table->integer('campo28');
            $table->integer('campo29');
            $table->integer('campo30');
            $table->integer('campo31');
            $table->integer('campo32');
            $table->integer('campo33');
            $table->integer('campo34');
            $table->integer('campo35');
            $table->integer('campo36');
            $table->integer('campo37');
            $table->integer('campo38');
            $table->integer('campo39');
            $table->integer('campo40');
            $table->integer('campo41');
            $table->integer('campo42');
            $table->integer('campo43');
            $table->integer('campo44');
            $table->integer('campo45');
            $table->string('campo46', 1000);
            
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
        Schema::drop('pits');
    }
}
