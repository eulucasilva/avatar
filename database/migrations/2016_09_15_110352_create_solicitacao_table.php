<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('solicitacaos', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->timestamps();
                       
            $table->integer('fk_colegiado')->unsigned();
            $table->foreign('fk_colegiado')->references('id')-> on('colegiados');

            $table->integer('fk_departamento')->unsigned();
            $table->foreign('fk_departamento')->references('id')-> on('departamentos');

            $table->integer('fk_periodo_letivo')->unsigned();
            $table->foreign('fk_periodo_letivo')->references('id')-> on('periodo_letivos');
            
            $table->integer('fk_curso')->unsigned();
            $table->foreign('fk_curso')->references('id')-> on('cursos');

            $table->integer('fk_area')->unsigned();
            $table->foreign('fk_area')->references('id')-> on('areas');
            
            $table->integer('fk_disciplina')->unsigned();
            $table->foreign('fk_disciplina')->references('id')-> on('disciplinas');

            $table->string('status_solicitacao')->default('Pendente');
            $table->string('data_solicitacao', 300);
            $table->string('data_resultado', 300)->nullable();
            $table->string('quant_pratica_solicitada', 300);

            $table->string('quant_teorica_solicitada', 300);
            $table->string('quant_estagio_solicitada', 300);
            $table->string('quant_aluno_teorica', 300);
            $table->string('quant_aluno_pratica', 300);

            $table->string('quant_aluno_estagio', 300);
            $table->string('quant_pratica_aprovada', 300)->nullable();
            $table->string('quant_teorica_aprovada', 300)->nullable();
            $table->string('quant_estagio_aprovada', 300)->nullable();

            $table->string('creditacao_estagio', 300);
            $table->string('creditacao_pratica', 300);
            $table->string('creditacao_teorica', 300);
            $table->string('observacoes_colegiado', 300)->nullable();;
            $table->string('observacoes_departamento', 300)->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicitacaos');
    }
}
