<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Solicitacao;
use App\Colegiado;
use App\Departamento;

use App\PeriodoLetivo;
use App\Curso;
use App\Area;
use App\Disciplina;
use App\Turma;
use App\Professor;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $solicitacaos = Solicitacao::where('status_solicitacao', '=', 'Aprovada')->get();
        $turmas = Turma::orderBy('id','DESC')->paginate(5);
        $professors = Professor::lists('nome_professor', 'id');

        return view('turma.index',compact('turmas', 'solicitacaos', 'professors'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodo_letivos = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');

        $cursos = Curso::lists('nome_curso', 'id');

        $areas = Area::lists('nome', 'id');

        $disciplinas = Disciplina::lists('nome_disciplina', 'id');

		$departamentos = Departamento::lists('nome', 'id');

		return view('turma.create',   compact('periodo_letivos', 'cursos','areas', 'disciplinas', 'departamentos') );      
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate
       (
            $request, 
            [
                'fk_colegiado' => 'required',
                'fk_departamento' => 'required',
                'fk_periodo_letivo' => 'required',
                'fk_curso' => 'required',
                'fk_area' => 'required',
                'fk_disciplina' => 'required',
                'data_solicitacao' => 'required',
                'quant_pratica_solicitada' => 'required',
                'quant_teorica_solicitada' => 'required',
                'quant_estagio_solicitada' => 'required',
                'descricao_solicitacao' => 'required',       
            ]   
        );
 
        Solicitacao::create($request->all());

        return redirect()->route('solicitacao.index') ->with('success','Solicitação realizada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turmas = Turma::find($id);
        return view('turma.show',compact('turmas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turmas = Turma::find($id);
        $professors = Professor::lists('nome_professor', 'id');

        return view('turma.edit', compact('turmas', 'professors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate
        (
            $request, 
            [
               'fk_professor' => 'required',
                'ch_semestral_turma' => 'required',
                'ch_semanal_turma' => 'required',
            ]
        );

        Turma::find($id)->update($request->all());

        return redirect()->route('turma.index')->with('success','Turma atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Turma::find($id)->delete();
        return redirect()->route('turma.index')->with('success','Turma apagada com sucesso!');
    }

    public function gerar($id)
    {
        $solicitacaos = Solicitacao::find($id);

        if($solicitacaos -> status_solicitacao == 'Aprovada')
        {

            for($i=0;$i<$solicitacaos->quant_pratica_aprovada;$i++)
            {           
                Turma::create(['fk_solicitacao' => $id,'tipo_turma' => 'Pratica','ch_semestral_turma' => $id,'ch_semanal_turma' => $id]);
            }
            for($i=0; $i<$solicitacaos ->quant_teorica_aprovada; $i++)
            {
                Turma::create(['fk_solicitacao' => $id,'tipo_turma' => 'Teorica','ch_semestral_turma' => $id,'ch_semanal_turma' => $id]); 
            }
            for($i=0; $i<$solicitacaos ->quant_estagio_aprovada; $i++)
            {
                Turma::create(['fk_solicitacao' => $id,'tipo_turma' => 'Estagio','ch_semestral_turma' => $id,'ch_semanal_turma' => $id]); 
            }
        }

        Solicitacao::where('id', '=', $id)->update(['status_solicitacao' => 'Concluida']);
       

        $turmas = Turma::where('fk_professor', '=', null)->get();

         return redirect()->route('turma.index')->with('success', 'Turmas geradas com sucesso!');
    }
} 
