<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Funcionario;


class FuncionarioController extends Controller
{
    public function index(Request $request)
    {
        $funcionarios = Funcionario::orderBy('id','DESC')->paginate(5);
        return view('funcionario.index',compact('funcionarios'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('funcionario.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'nome_funcionario' => 'required',
            'telefone_funcionario' => 'required',
            'datanasc_funcionario' => 'required',
            'dataadmissao_funcionario' => 'required',
            'grauinstrucao_funcionario' => 'required',
            'formacao_funcionario' => 'required',
            'funcao_funcionario' => 'required',
            'horarioinicio_funcionario' => 'required',
            'horariofim_funcionario' => 'required'
        ]);

        Funcionario::create($request->all());

        return redirect()->route('funcionario.index')
                        ->with('success','Sala cadastrada com sucesso!');
    }
    
    public function edit($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionario.edit',compact('funcionario'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome_funcionario' => 'required',
            'telefone_funcionario' => 'required',
            'datanasc_funcionario' => 'required',
            'dataadmissao_funcionario' => 'required',
            'grauinstrucao_funcionario' => 'required',
            'formacao_funcionario' => 'required',
            'funcao_funcionario' => 'required',
            'horarioinicio_funcionario' => 'required',
            'horariofim_funcionario' => 'required'
        ]);

        Funcionario::find($id)->update($request->all());

        return redirect()->route('funcionario.index')
                        ->with('success','Funcionario atualizado com sucesso!');
    }
    
    public function show($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionario.show',compact('funcionario'));
    }
}