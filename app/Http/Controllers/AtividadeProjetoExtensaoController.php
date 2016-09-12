<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PeriodoLetivo;
use App\Atividade_projeto_extensao;
use App\Professor;

class AtividadeProjetoExtensaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $atividade_projeto_extensaos = Atividade_projeto_extensao::orderBy('id','DESC')->paginate(5);
        return view('atividadeProjetoExtensao.index',compact('atividade_projeto_extensaos'))
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
       
        return view('atividadeProjetoExtensao.create', compact('professores','periodo_letivos'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tipo_part_prof_atividade_projeto_extensao' => 'required',
            'ch_total_atividade_projeto_extensao' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_projeto_extensao::create($request->all());

        return redirect()->route('atividadeProjetoExtensao.index')
                        ->with('success','Atividade cadastrada com sucesso!');
    }

    public function show($id)
    {
        $atividade_projeto_extensao = Atividade_projeto_extensao::find($id);
        return view('atividadeProjetoExtensao.show',compact('atividade_projeto_extensao'));
    }

    public function edit($id)
    {
        
        $atividade_projeto_extensao = Atividade_projeto_extensao::find($id);
        $professores = Professor::lists('nome_professor', 'id');
        $periodo_letivos = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
       
         return view('atividadeProjetoExtensao.edit', compact('atividade_projeto_extensao','professores','periodo_letivos'));
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
            'tipo_part_prof_atividade_projeto_extensao' => 'required',
            'ch_total_atividade_projeto_extensao' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_projeto_extensao::find($id)->update($request->all());

        return redirect()->route('atividadeProjetoExtensao.index')
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
        Atividade_projeto_extensao::find($id)->delete();
        return redirect()->route('atividadeProjetoExtensao.index')
                        ->with('success','Atividade excluída com sucesso!');
    }
}
