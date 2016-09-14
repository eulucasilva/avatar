<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aluno;

class alunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $alunos = aluno::orderBy('id','DESC')->paginate(5);
        return view('aluno.index',compact('alunos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.create');
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
            'matricula_aluno' => 'required',
            'ano_ingresso_aluno' => 'required',
            'nome_aluno' => 'required',
            'endereco_aluno' => 'required',
            'telefone_aluno' => 'required',
            'email_aluno' => 'required|email|unique:users,email|max:30',

        ]);

        aluno::create($request->all());

        return redirect()->route('aluno.index')
                        ->with('success','aluno cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = aluno::find($id);
        return view('aluno.show',compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = aluno::find($id);
        return view('aluno.edit',compact('aluno'));
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
            'matricula_aluno' => 'required',
            'ano_ingresso_aluno' => 'required',
            'nome_aluno' => 'required',
            'endereco_aluno' => 'required',
            'telefone_aluno' => 'required',
            'email_aluno' => 'required',
        ]);

        aluno::find($id)->update($request->all());

        return redirect()->route('aluno.index')
                        ->with('success','aluno atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        aluno::find($id)->delete();
        return redirect()->route('aluno.index')
                        ->with('success','aluno apagado com sucesso!');
    }
}