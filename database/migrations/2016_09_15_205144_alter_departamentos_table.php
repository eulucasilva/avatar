<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDepartamentosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('departamentos', function (Blueprint $table) {
            $table->integer('fk_coordenador')->unsigned()->nullable();
            $table->foreign('fk_coordenador')->references('id')->on('coordenacaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('departamentos', function (Blueprint $table) {
            $table->dropForeign('departamentos_fk_coordenador_foreign');
            $table->dropColumn('fk_departamentos');
        });
    }

}
