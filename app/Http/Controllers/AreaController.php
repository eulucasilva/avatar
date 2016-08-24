<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use DB;
use App\Departamento;

/**
 * Description of AreaController
 *
 * @author Lucas
 */
class AreaController extends Controller {

    public function index(Request $request) {
        $areas = Area::orderBy('id', 'DESC')->paginate(5);
        return view('areas.index', compact('areas'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create() {
        //$departamentos = DB::table('departamentos')->orderBy('nome', 'asc')->lists('nome', 'id');
        $departamentos = Departamento::lists('nome', 'id');
        return view('areas.create', compact('departamentos'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nome' => 'required',
            'fk_departamento' => 'required'
        ]);

        Area::create($request->all());

        return redirect()->route('area.index')
                        ->with('success', 'Área cadastrada com sucesso!');
    }

    public function edit($id) {
        $area = Area::find($id);
        $departamentos = Departamento::lists('nome', 'id');
        return view('areas.edit', compact('area', 'departamentos'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nome' => 'required',
            'fk_departamento' => 'required'
        ]);

        Area::find($id)->update($request->all());

        return redirect()->route('area.index')
                        ->with('success', 'Área atualizada com sucesso!');
    }

    public function destroy($id) {
        Area::find($id)->delete();
        return redirect()->route('area.index')
                        ->with('success', 'Área excluída com sucesso!');
    }

    public function show($id) {
        $area = Area::find($id);
        return view('areas.show', compact('area'));
    }

}
