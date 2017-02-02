<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Frequencia;
use App\Funcionario;

class FrequenciaController extends Controller
{
    public function index(Request $request)
    {
        $frequencias = Frequencia::orderBy('id','DESC')->paginate(5);
        return view('frequencia.index',compact('frequencias'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $funcionarios = Funcionario::lists('nome_funcionario','id');
        return view('frequencia.create', compact('funcionarios'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'horaentrada_frequencia' => 'required',
            'horasainda_frequencia' => 'required',
            'status_frequencia' => 'required',
            'fk_funcionario' => 'required'
        ]);

        Frequencia::create($request->all());

        return redirect()->route('frequencia.index')
                        ->with('success','Frequencia cadastrada com sucesso!');
    }
    
    public function edit($id)
    {
        $frequencia = Frequencia::find($id);
        $funcionarios = Funcionario::lists('nome_funcionario','id');
        return view('frequencia.edit',compact('frequencia', 'funcionarios'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
           'horaentrada_frequencia' => 'required',
            'horasainda_frequencia' => 'required',
            'status_frequencia' => 'required',
            'fk_funcionario' => 'required'
        ]);

        Frequencia::find($id)->update($request->all());

        return redirect()->route('frequencia.index')
                        ->with('success','Frequencia atualizada com sucesso!');
    }
    
    public function show($id)
    {
        $frequencia = Frequencia::find($id);
        return view('frequencia.show',compact('frequencia'));
    }
}