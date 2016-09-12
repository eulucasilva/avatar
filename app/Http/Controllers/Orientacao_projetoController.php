<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orientacao_projeto;
use App\Aluno;
use App\Professor;
use App\Projeto;
use App\PeriodoLetivo;

class Orientacao_projetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orientacao_projetos = \App\Orientacao_projeto::orderBy('id','DESC')->paginate(5);
        return view('orientacao_projeto.index',compact('orientacao_projetos'))
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
        $alunos = Aluno::lists('nome_aluno', 'id');
        $periodoLetivo = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
        $projetos = Projeto::lists('nome_projeto', 'id');
       
        return view('orientacao_projeto.create', compact('professores','alunos','periodoLetivo','projetos' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'fk_periodoLetivo' => 'required',
            'fk_professor' => 'required',
            'fk_aluno' => 'required',
            'fk_projeto' =>'required'
        ]);

        orientacao_projeto::create($request->all());

        return redirect()->route('orientacao_projeto.index')
                        ->with('success','Orientação de Projeto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orientacao_projeto = Orientacao_projeto::find($id);
        return view('orientacao_projeto.show',compact('orientacao_projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $orientacao_projeto = Orientacao_projeto::find($id);
         $professores = Professor::lists('nome_professor', 'id');
         $alunos = Aluno::lists('nome_aluno', 'id');
         $periodoLetivo = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
         $projetos = Projeto::lists('nome_projeto', 'id');
         
         return view('orientacao_projeto.edit', compact('orientacao_projeto','professores','alunos', 'periodoLetivo','projetos'));
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
                      
            'fk_professor' => 'required',
            'fk_aluno' => 'required',
            'fk_periodoLetivo' => 'required',
            'fk_projeto'=>'required'
            
        ]);
  

        orientacao_projeto::find($id)->update($request->all());

        return redirect()->route('orientacao_projeto.index')
                        ->with('success','Orientação de Projetos atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        orientacao_projeto::find($id)->delete();
        return redirect()->route('orientacao_projeto.index')
                        ->with('success','Orientacao de Projetos apagado com sucesso!');
    }
}