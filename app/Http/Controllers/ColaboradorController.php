<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Colaborador;

class FrequenciaController extends Controller {

    public function index(Request $request) {
        $colaboradors = Frequencia::orderBy('id', 'DESC')->paginate(5);
        return view('colaborador.index', compact('colaboradors'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create() {
        return view('frequencia.create', compact('funcionarios'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nome_colaborador' => 'required',
            'email_colaborador' => 'required',
            'telefone_colaborador' => 'required',
            'areaatuacao_colaborador' => 'required',
            ' titulacao_colaborador' => 'required',
            'vinculo_colaborador' => 'required',
            'datanascimento_colaborador' => 'required'
        ]);

        Frequencia::create($request->all());

        return redirect()->route('colaborador.index')
                        ->with('success', 'Colaborador cadastrada com sucesso!');
    }

    public function edit($id) {
        $colaborador = colaborador::find($id);
        return view('colaborador.edit', compact('colaborador'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nome_colaborador' => 'required',
            'email_colaborador' => 'required',
            'telefone_colaborador' => 'required',
            'areaatuacao_colaborador' => 'required',
            ' titulacao_colaborador' => 'required',
            'vinculo_colaborador' => 'required',
            'datanascimento_colaborador' => 'required'
        ]);

        Colaborador::find($id)->update($request->all());

        return redirect()->route('colaborador.index')
                        ->with('success', 'Colaborador atualizada com sucesso!');
    }

    public function show($id) {

        return view('colaborador.show', compact('colaborador'));
    }

}
