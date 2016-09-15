<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Departamento;
use App\Secretario;

use Illuminate\Http\Request;

/**
 * Description of DepartamentoController
 *
 * @author Lucas
 */
class DepartamentoController extends Controller {
    
    public function index(Request $request) {
        $departamentos = Departamento::orderBy('id', 'DESC')->paginate(5);
        return view('departamento.index', compact('departamentos'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create() {
        $secretario = Secretario::lists('nome_secretario', 'id');
        return view('departamento.create', compact('secretario'));
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'nome' => 'required|max:45',
            'sigla' => 'required|max:10',
            'email' => 'required|email|unique:users,email|max:30',
            'campus' => 'required',
            'fk_secretario' => 'required'
        ]);

        Departamento::create($request->all());

        return redirect()->route('departamento.index')
                        ->with('success', 'Departamento cadastrado com sucesso!');
    }

    public function edit($id) 
    {
        $secretario = Secretario::lists('nome_secretario', 'id');
        $departamento = Departamento::find($id);
        return view('departamento.edit', compact('departamento', 'secretario'));

    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nome' => 'required|max:45',
            'sigla' => 'required|max:10',
            'email' => 'required|max:30',
            'campus' => 'required',
            'fk_secretario' => 'required'
        ]);

        Departamento::find($id)->update($request->all());

        return redirect()->route('departamento.index')
                        ->with('success', 'Departamento atualizado com sucesso!');
    }

    public function destroy($id) {
        Departamento::find($id)->delete();
        return redirect()->route('departamento.index')
                        ->with('success', 'Departamento excluído com sucesso!');
    }

    public function show($id) {
        $departamento = Departamento::find($id);
        //return view('departamento.show', compact('departamento'));
    }
    
}
