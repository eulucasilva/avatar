<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubstituicaosTable extends Migration
{
    public function up()
    {
        Schema::create('substituicaos', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->timestamps();
            
            $table->date('inicio_substituicao');
            $table->date('fim_substituicao');
            
            $table->string('motivo_substituicao', 300);
            $table->string('portaria_substituicao', 100);
            $table->string('numcop_substituicao', 100);
                        
            $table->integer('fk_professor_substituido')->unsigned();
            $table->foreign('fk_professor_substituido')->references('id')-> on('professors');
            
            $table->integer('fk_professor_substituto')->unsigned();
            $table->foreign('fk_professor_substituto')->references('id')-> on('professors');

        });
    }
    public function down()
    {
        Schema::drop('substituicaos');
    }
}
