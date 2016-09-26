<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orientacao;
use App\Aluno;
use App\Professor;
use App\PeriodoLetivo;

class OrientacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orientacaos = Orientacao::orderBy('id','DESC')->paginate(5);
        return view('orientacao.index',compact('orientacaos'))
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
       
        return view('orientacao.create', compact('professores','alunos','periodoLetivo' ));
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
            'tipo_orientacao' => 'required|max:200',
            'nivel_orientacao' => 'required|max:45',
            'ch_orientacao' => 'required|max:45',
            'fk_periodoLetivo' => 'required',
            'fk_professor' => 'required',
            'fk_alunos' => 'required',
        ]);

        orientacao::create($request->all());

        return redirect()->route('orientacao.index')
                        ->with('success','orientação cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orientacao = orientacao::find($id);
        return view('orientacao.show',compact('orientacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $orientacao = Orientacao::find($id);
         $professores = Professor::lists('nome_professor', 'id');
         $alunos = Aluno::lists('nome_aluno', 'id');
         $periodoLetivo = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
         
         return view('orientacao.edit', compact('orientacao','professores','alunos', 'periodoLetivo'));
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
            
            'tipo_orientacao' => 'required',
            'nivel_orientacao' => 'required',
            'ch_orientacao' => 'required',
            'fk_periodoLetivo' => 'required',
            'fk_professor' => 'required',
            'fk_aluno' => 'required',
        ]);
  

        orientacao::find($id)->update($request->all());

        return redirect()->route('orientacao.index')
                        ->with('success','coordenacao atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        orientacao::find($id)->delete();
        return redirect()->route('orientacao.index')
                        ->with('success','orientacao apagado com sucesso!');
    }
}