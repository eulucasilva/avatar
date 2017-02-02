<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Departamento;

class DepartamentoController extends Controller {

    public function index(Request $request) {
        $departamentos = Departamento::orderBy('id', 'DESC')->paginate(5);
        return view('departamento.index', compact('departamentos'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create() {
        return view('departamento.create', compact('departamentos'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nome_departamento' => 'required',
            'descricao_departamento' => 'required',
        ]);

        Departamento::create($request->all());

        return redirect()->route('departamento.index')
                        ->with('success', 'Departamento cadastrada com sucesso!');
    }

    public function edit($id) {
        $departamento = Departamento::find($id);

        return view('departamento.edit', compact('departamento'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nome_departamento' => 'required',
            'descricao_departamento' => 'required',
        ]);

        Departamento::find($id)->update($request->all());

        return redirect()->route('departamento.index')
                        ->with('success', 'Departamento atualizada com sucesso!');
    }

    public function show($id) {
        $departamento = Departamento::find($id);
        return view('departamento.show', compact('departamento'));
    }

}
