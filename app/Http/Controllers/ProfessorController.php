<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Professor;
use App\Departamento;
use App\Area;
use App\User;

class professorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $professores = Professor::orderBy('id','DESC')->paginate(5);
        return view('professor.index',compact('professores'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
            $departamentos = Departamento::lists('nome', 'id');
            $areas = Area::lists('nome', 'id');
            $usuarios = User::lists('name', 'id');
            return view('professor.create', compact('departamentos','areas','usuarios'));
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
            'matricula_professor' => 'required|max:11',
            'situacao_professor' => 'required|max:15',
            'regime_trabalho_professor' => 'required:max:30',
            'ch_professor' => 'required',
            'inicio_contrato_professor' => 'required',
            'termino_contrato_professor' => 'required',
            'contrato_professor' => 'required|max:15',
            'classe_professor' => 'required|max:45',
            'titulo_professor' => 'required|max:45',
            'email_professor' => 'required|max:30',
            'nome_professor' => 'required|max:100',
            'telefone_professor' => 'required|max:15',
            'endereco_professor' => 'required|max:100',
            'fk_usuario' => 'required',
            'fk_departamento' => 'required',
            'fk_area' => 'required',

        ]);

        Professor::create($request->all());

        return redirect()->route('professor.index')
                        ->with('success','Professor cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Professor::find($id);
        return view('professor.show',compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = Professor::find($id);
        $departamentos = Departamento::lists('nome', 'id');
        $areas = Area::lists('nome', 'id');
        $usuarios = User::lists('nome', 'id');
        return view('professor.edit',compact('professor','departamentos','areas','usuarios' ));
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
            'matricula_professor' => 'required',
            'situacao_professor' => 'required',
            'regime_trabalho_professor' => 'required',
            'ch_professor' => 'required',
            'inicio_contrato_professor' => 'required',
            'termino_contrato_professor' => 'required',
            'contrato_professor' => 'required',
            'classe_professor' => 'required',
            'titulo_professor' => 'required',
            'email_professor' => 'required',
            'nome_professor' => 'required',
            'telefone_professor' => 'required',
            'endereco_professor' => 'required',
            'fk_usuario' => 'required',
            'fk_departamento' => 'required',
            'fk_area' => 'required',
        ]);

        Professor::find($id)->update($request->all());

        return redirect()->route('professor.index')
                        ->with('success','Professor atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Professor::find($id)->delete();
        return redirect()->route('professor.index')
                        ->with('success','Professor apagado com sucesso!');
    }
}
