<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PeriodoLetivo;
use App\Atividade_administrativa_acd;
use App\Professor;

class AtividadeAdministrativaAcdController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $atividade_administrativa_acds = Atividade_administrativa_acd::orderBy('id','DESC')->paginate(5);
        return view('atividadeAdministrativaAcd.index',compact('atividade_administrativa_acds'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$professores = Professor::lists('nome_professor', 'id');
        $periodo_letivos = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
       
        return view('atividadeAdministrativaAcd.create', compact('atividade_administrativa_acd','professores','periodo_letivos'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tipo_participacao_atividade_administrativa_acd' => 'required',
            'ch_participacao_atividade_administrativa_acd' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_administrativa_acd::create($request->all());

        return redirect()->route('atividadeAdministrativaAcd.index')
                        ->with('success','Atividade cadastrada com sucesso!');
    }

    public function show($id)
    {
        $atividade_administrativa_acd = Atividade_administrativa_acd::find($id);
        return view('atividadeAdministrativaAcd.show',compact('atividade_administrativa_acd'));
    }

    public function edit($id)
    {
        
        $atividade_administrativa_acd = Atividade_administrativa_acd::find($id);
        $professores = Professor::lists('nome_professor', 'id');
        $periodo_letivos = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
       
         return view('atividadeAdministrativaAcd.edit', compact('atividade_administrativa_acd','professores','periodo_letivos'));
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
        $this->validate($request, [
            'tipo_participacao_atividade_administrativa_acd' => 'required',
            'ch_participacao_atividade_administrativa_acd' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_administrativa_acd::find($id)->update($request->all());

        return redirect()->route('atividadeAdministrativaAcd.index')
                        ->with('success','Atividade atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Atividade_administrativa_acd::find($id)->delete();
        return redirect()->route('atividadeAdministrativaAcd.index')
                        ->with('success','Atividade excluída com sucesso!');
    }
}
