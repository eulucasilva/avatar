<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Atividade_ensino;
use App\Professor;
use App\PeriodoLetivo;

class AtividadeEnsinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $atividade_ensinos = Atividade_ensino::orderBy('id','DESC')->paginate(5);
        return view('atividadeEnsino.index',compact('atividade_ensinos'))
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
       
        return view('atividadeEnsino.create', compact('atividade_ensinos','professores','periodo_letivos'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'ch_atividade_ensino' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_ensino::create($request->all());

        return redirect()->route('atividadeEnsino.index')
                        ->with('success','Atividade cadastrada com sucesso!');
    }

    public function show($id)
    {
        $atividade_ensinos = Atividade_ensino::find($id);
        
        return view('atividadeEnsino.show',compact('atividade_ensinos'));
    }

    public function edit($id)
    {
        
         $atividade_ensinos = Atividade_ensino::find($id);
         $professores = Professor::lists('nome_professor', 'id');
         $periodo_letivos = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
         return view('atividadeEnsino.edit', compact('atividade_ensinos','professores','periodo_letivos'));
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
            'ch_atividade_ensino' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_ensino::find($id)->update($request->all());

        return redirect()->route('atividadeEnsino.index')
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
        Atividade_ensino::find($id)->delete();
        return redirect()->route('atividadeEnsino.index')
                        ->with('success','Atividade excluída com sucesso!');
    }
}
