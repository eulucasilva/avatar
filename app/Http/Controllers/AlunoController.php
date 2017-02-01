<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aluno;
use App\Role;
use DB;
use Hash;

class AlunoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $data = Aluno::orderBy('id', 'DESC')->paginate(5);
        return view('aluno.index', compact('data'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $roles = Role::lists('display_name', 'id');
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
                        'nome' => 'required',
                        'email' => 'required|email|unique:alunos,email',
			'telefone' => 'required',
			'bolsista' => 'required',
			'data_nasc' => 'required',
        ]);

       Aluno::create($request->all());
        

        return redirect()->route('aluno.index')
                        ->with('success', 'Aluno cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $aluno = Aluno::find($id);
        return view('aluno.show', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $aluno = Aluno::find($id);
             

        return view('alunos.edit', compact('aluno'));
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
            'nome' => 'required',
            'email' => 'required|email|unique:alunos,email',
			'telefone' => 'required',
			'bolsista' => 'required',
			'dataNasc' => 'required',
            
        ]);

        $input = $request->all();
        
        $aluno = Aluno::find($id);
        $aluno->update($input);
        


        

        return redirect()->route('aluno.index')
                        ->with('success', 'Aluno atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Aluno::find($id)->delete();
        return redirect()->route('aluno.index')
                        ->with('success', 'Usuário excluído com sucesso!');
    }

}
