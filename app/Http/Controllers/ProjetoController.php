<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projeto;
use App\Professor;
use App\PeriodoLetivo;

class projetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projetos = Projeto::orderBy('id','DESC')->paginate(5);
        return view('projeto.index',compact('projetos'))
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
        $periodoLetivo = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
        return view('projeto.create', compact('professores','periodoLetivo'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome_projeto' => 'required',
            'tipo_projeto' => 'required',
            'tipo_participacao_projeto' => 'required',
            'fk_professor' => 'required',
            'fk_periodo_letivo' => 'required',
        ]);

        projeto::create($request->all());

        return redirect()->route('projeto.index')
                        ->with('success','Projeto cadastrado com sucesso!');
    }

    public function show($id)
    {
        $projeto = projeto::find($id);
        return view('projeto.show',compact('projeto'));
    }

    public function edit($id)
    {
        
         $projeto = projeto::find($id);
         $professores = Professor::lists('nome_professor', 'id');
         $periodoLetivo = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
         return view('projeto.edit', compact('projeto','professores','periodoLetivo'));
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
            'nome_projeto' => 'required',
            'tipo_projeto' => 'required',
            'tipo_participacao_projeto' => 'required',
            'fk_professor' => 'required',
            'fk_periodo_letivo' => 'required',
        ]);

        projeto::find($id)->update($request->all());

        return redirect()->route('projeto.index')
                        ->with('success','Projeto atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        projeto::find($id)->delete();
        return redirect()->route('projeto.index')
                        ->with('success','projeto excluído com sucesso!');
    }
}