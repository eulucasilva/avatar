<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Colegiado;
use App\Departamento;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cursos = Curso::orderBy('id','DESC')->paginate(5);
        return view('curso.index',compact('cursos'))
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
        $colegiados = Colegiado::lists('nome_colegiado', 'id');
        return view('curso.create', compact('departamentos','colegiados'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome_curso' => 'required',
            'regime_curso' => 'required',
            'campus_curso' => 'required',
            'tipo_curso' => 'required',
            'fk_departamento' => 'required',
            'fk_colegiado' => 'required',
        ]);

        curso::create($request->all());

        return redirect()->route('curso.index')
                        ->with('success','Curso cadastrado com sucesso!');
    }

    public function show($id)
    {
        $curso = curso::find($id);
        return view('curso.show',compact('curso'));
    }

    public function edit($id)
    {
        
         $curso = curso::find($id);
         $departamentos = Departamento::lists('nome', 'id');
         $colegiados = Colegiado::lists('nome_colegiado', 'id');
         return view('curso.edit', compact('curso','departamentos','colegiados'));
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
            'nome_curso' => 'required',
            'regime_curso' => 'required',
            'campus_curso' => 'required',
            'tipo_curso' => 'required',
            'fk_departamento' => 'required',
            'fk_colegiado' => 'required',
        ]);

        curso::find($id)->update($request->all());

        return redirect()->route('curso.index')
                        ->with('success','Curso atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        curso::find($id)->delete();
        return redirect()->route('curso.index')
                        ->with('success','Curso excluído com sucesso!');
    }
}