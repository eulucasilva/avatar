<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Departamento;
use App\Area;
use App\Disciplina;

/**
 * Description of DisciplinaController
 *
 * @author Lucas
 */
class DisciplinaController extends Controller {

    public function index(Request $request) {
        $disciplinas = Disciplina::orderBy('id', 'DESC')->paginate(5);
        return view('disciplina.index', compact('disciplinas'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create() {

        $departamento = Departamento::lists('nome', 'id');
        $area = Area::lists('nome', 'id');
        return view('disciplina.create', compact('departamento', 'area'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nome_disciplina' => 'required|max:100',
            'codigo_disciplina' => 'required|max:6',
            'creditacao_teorica' => 'required',
            'creditacao_pratica' => 'required',
            'creditacao_estagio' => 'required',
            'fk_area' => 'required',
            'fk_departamento' => 'required',
            'ch_total_disciplina' => 'required',
        ]);

        $campos = $request->all();
        $campos['ch_teorica'] = $campos['creditacao_teorica'] * 15;
        $campos['ch_pratica'] = $campos['creditacao_pratica'] * 30;
        $campos['ch_estagio'] = $campos['creditacao_estagio'] * 45;
        
        Disciplina::create($campos);

        return redirect()->route('disciplina.index')
                        ->with('success', 'Disciplina criada com sucesso!');
    }

    public function show($id) {
        $disciplina = disciplina::find($id);
        return view('disciplina.show', compact('disciplina'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nome_disciplina' => 'required|max:100',
            'codigo_disciplina' => 'required|max:6',
            'creditacao_teorica' => 'required',
            'creditacao_pratica' => 'required',
            'creditacao_estagio' => 'required',
            'fk_area' => 'required',
            'fk_departamento' => 'required',
            'ch_total_disciplina' => 'required',
        ]);
        
        $campos = $request->all();
        $campos['ch_teorica'] = $campos['creditacao_teorica'] * 15;
        $campos['ch_pratica'] = $campos['creditacao_pratica'] * 30;
        $campos['ch_estagio'] = $campos['creditacao_estagio'] * 45;
        
        
        Disciplina::find($id)->update($campos);

        return redirect()->route('disciplina.index')
                        ->with('success', 'Disciplina atualizada com sucesso!');
    }

    public function edit($id) {

        $disciplina = disciplina::find($id);
        $departamento = Departamento::lists('nome', 'id');
        $area = Area::lists('nome', 'id');
        return view('disciplina.edit', compact('disciplina', 'departamento', 'area'));
    }

    public function destroy($id) {
        disciplina::find($id)->delete();
        return redirect()->route('disciplina.index')
                        ->with('success', 'Disciplina excluída com sucesso!');
    }

}
