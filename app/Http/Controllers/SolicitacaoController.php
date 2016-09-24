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

class SolicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $solicitacaos = Solicitacao::orderBy('id','DESC')->paginate(5);
        return view('solicitacao.index',compact('solicitacaos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $colegiados = Colegiado::lists('sigla_colegiado', 'id');

        $periodo_letivos = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');

        $cursos = Curso::lists('nome_curso', 'id');

        $areas = Area::lists('nome', 'id');

        $disciplinas = Disciplina::lists('nome_disciplina', 'id');

		$departamentos = Departamento::lists('nome', 'id');

		return view('solicitacao.create',   compact('colegiados', 'periodo_letivos', 'cursos','areas', 'disciplinas', 'departamentos') );
      
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
       ($request, 
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

        return redirect()->route('solicitacao.index')
                        ->with('success','Solicitação realizada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitacaos = Solicitacao::find($id);
        return view('solicitacao.show',compact('solicitacaos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colegiados = Colegiado::lists('sigla_colegiado', 'id');

        $periodo_letivos = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');

        $cursos = Curso::lists('nome_curso', 'id');

        $areas = Area::lists('nome', 'id');

        $disciplinas = Disciplina::lists('nome_disciplina', 'id');

        $departamentos = Departamento::lists('nome', 'id');

        $solicitacaos = Solicitacao::find($id);

        return view('solicitacao.edit', compact('solicitacaos', 'colegiados', 'periodo_letivos', 'cursos','areas', 'disciplinas', 'departamentos'));
    }

    public function responder($id)
    {
        $solicitacaos = Solicitacao::find($id);

        return view('solicitacao.responder', compact('solicitacaos'));
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
            ]
        );

        Solicitacao::find($id)->update($request->all());

        return redirect()->route('solicitacao.index')->with('success','Solicitação atualizada com sucesso');
    }

    public function gravarResposta(Request $request, $id)
    {
        $this->validate
        (
            $request, 
            [
               'status_solicitacao' => 'required',
                'quant_pratica_aprovada' => 'required',
                'quant_teorica_aprovada' => 'required',
                'quant_estagio_aprovada' => 'required',
                'data_resultado' => 'required',
            ]
        );

        Solicitacao::find($id)->update($request->all());

        return redirect()->route('solicitacao.index')->with('success','Resposta gravada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Solicitacao::find($id)->delete();
        return redirect()->route('solicitacao.index')->with('success','Solicitação apagada com sucesso!');
    }
}
