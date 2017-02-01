<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Professor;
use App\Role;
use DB;
use Hash;

class ProfessorController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $data = Professor::orderBy('id', 'DESC')->paginate(5);
        return view('professor.index', compact('data'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $departamentos = Departamento::lists('display_name', 'id');
        $cursos = Curso::lists('display_nme', 'id');
        return view('professor.create', compact('departamentos', 'cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'matricula' => 'required',
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'areaDeAtuacao' => 'required',
            'titulacao' => 'required',
            'classe' => 'required',
            'regimeDeTrabalho' => 'required',
            'tipoVincluo' => 'required',
            'dataNasc' => 'required',
            'fk_departamento' => 'required',
            'fk_curso' => 'required',
        ]);


        $professor = Professor::create($input);


        return redirect()->route('professor.index')
                        ->with('success', 'Professor cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $professor = Professor::find($id);
        return view('professor.show', compact('Professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $Professor = Professor::find($id);


        return view('professor.edit', compact('Professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
           'matricula' => 'required',
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'areaDeAtuacao' => 'required',
            'titulacao' => 'required',
            'classe' => 'required',
            'regimeDeTrabalho' => 'required',
            'tipoVincluo' => 'required',
            'dataNasc' => 'required',
            'fk_departamento' => 'required',
            'fk_curso' => 'required',
        ]);

        $input = $request->all();

        $professor = Professor::find($id);
       $professor->update($input);





        return redirect()->route('professor.index')
                        ->with('success', 'Professor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Professor::find($id)->delete();
        return redirect()->route('professor.index')
                        ->with('success', 'Professor excluído com sucesso!');
    }

}
