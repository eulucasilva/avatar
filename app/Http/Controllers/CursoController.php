<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cruso;
use App\Departamento;
use DB;
use Hash;

class CursoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $data = Curso::orderBy('id', 'DESC')->paginate(5);
        return view('curso.index', compact('data'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $departamento = Departamento::lists('display_name', 'id');
        return view('aluno.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
                        'nomeCurso' => 'required',
                        'fk_departamento' => 'required',
			
        ]);

       Curso::create($request->all());
        

        return redirect()->route('curso.index')
                        ->with('success', 'Cruso cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $curso = Curso::find($id);
        return view('curso.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $curso = Curso::find($id);
             

        return view('curso.edit', compact('curso'));
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
            'nomeCurso' => 'required',
            'fk_departamento' => 'required',
            
        ]);

        $input = $request->all();
        
        $curso = Curso::find($id);
        $aluno->update($input);
        


        

        return redirect()->route('curso.index')
                        ->with('success', 'Curso atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Curso::find($id)->delete();
        return redirect()->route('curso.index')
                        ->with('success', 'Curso excluído com sucesso!');
    }

}
