<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Atividade_complementar;
use App\Professor;
use App\PeriodoLetivo;

class AtividadeComplementarController extends Controller
{
      /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $atividade_complementars = Atividade_complementar::orderBy('id','DESC')->paginate(5);
        return view('atividadeComplementar.index',compact('atividade_complementars'))
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
       
        return view('atividadeComplementar.create', compact('professores','periodo_letivos'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'ch_total_atividade_complementar' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_complementar::create($request->all());

        return redirect()->route('atividadeComplementar.index')
                        ->with('success','Atividade cadastrada com sucesso!');
    }

    public function show($id)
    {
        $atividade_complementar = Atividade_complementar::find($id);
        return view('atividadeComplementar.show',compact('atividade_complementar'));
    }

    public function edit($id)
    {
        
        $atividade_complementars = Atividade_complementar::find($id);
        $professores = Professor::lists('nome_professor', 'id');
        $periodo_letivos = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
        
         return view('atividadeComplementar.edit', compact('atividade_complementars','professores','periodo_letivos'));
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
            'ch_total_atividade_complementar' => 'required',
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
        ]);

        Atividade_complementar::find($id)->update($request->all());

        return redirect()->route('atividadeComplementar.index')
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
        Atividade_complementar::find($id)->delete();
        return redirect()->route('atividadeComplementar.index')
                        ->with('success','Atividade excluída com sucesso!');
    }
}
