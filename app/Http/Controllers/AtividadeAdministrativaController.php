<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PeriodoLetivo;
use App\Atividade_administrativa;
use App\Professor;

class AtividadeAdministrativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $atividade_administrativas = Atividade_administrativa::orderBy('id','DESC')->paginate(5);
        return view('atividadeAdministrativa.index',compact('atividade_administrativas'))
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
       
        return view('atividadeAdministrativa.create', compact('atividade_administrativa','professores','periodo_letivos'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tipo_atividade_administrativa' => 'required',
            'ch_atividade_administrativa' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_administrativa::create($request->all());

        return redirect()->route('atividadeAdministrativa.index')
                        ->with('success','Atividade cadastrada com sucesso!');
    }

    public function show($id)
    {
        $atividade_administrativa = Atividade_administrativa::find($id);
        return view('atividadeAdministrativa.show',compact('atividade_administrativa'));
    }

    public function edit($id)
    {
        
        $atividade_administrativa = Atividade_administrativa::find($id);
        $professores = Professor::lists('nome_professor', 'id');
        $periodo_letivos = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
       
         return view('atividadeAdministrativa.edit', compact('atividade_administrativa','professores','periodo_letivos'));
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
            'tipo_atividade_administrativa' => 'required',
            'ch_atividade_administrativa' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_administrativa::find($id)->update($request->all());

        return redirect()->route('atividadeAdministrativa.index')
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
        Atividade_administrativa::find($id)->delete();
        return redirect()->route('atividadeAdministrativa.index')
                        ->with('success','Atividade excluída com sucesso!');
    }
}
