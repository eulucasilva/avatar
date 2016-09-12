<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Atividade_pesquisa;
use App\Professor;
use App\PeriodoLetivo;




class AtividadePesquisaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $atividade_pesquisas = Atividade_pesquisa::orderBy('id','DESC')->paginate(5);
        return view('atividadePesquisa.index',compact('atividade_pesquisas'))
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
       
        return view('atividadePesquisa.create', compact('atividade_pesquisas','professores','periodo_letivos'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tipo_part_prof_atividade_pesquisa' => 'required',
            'ch_total_atividade_pesquisa' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_pesquisa::create($request->all());

        return redirect()->route('atividadePesquisa.index')
                        ->with('success','Atividade cadastrada com sucesso!');
    }

    public function show($id)
    {
        $atividade_pesquisa = Atividade_pesquisa::find($id);
        return view('atividadePesquisa.show',compact('atividade_pesquisa'));
    }

    public function edit($id)
    {
        
        $atividade_pesquisas = Atividade_pesquisa::find($id);
        $professores = Professor::lists('nome_professor', 'id');
        $periodo_letivos = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
       
         return view('atividadePesquisa.edit', compact('atividade_pesquisas','professores','periodo_letivos'));
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
            'tipo_part_prof_atividade_pesquisa' => 'required',
            'ch_total_atividade_pesquisa' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_pesquisa::find($id)->update($request->all());

        return redirect()->route('atividadePesquisa.index')
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
        Atividade_pesquisa::find($id)->delete();
        return redirect()->route('atividadePesquisa.index')
                        ->with('success','Atividade excluída com sucesso!');
    }
}
