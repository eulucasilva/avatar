<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use App\Coordenacao;
use App\Professor;
use App\Departamento;

/**
 * Description of AreaController
 *
 * @author Lucas
 */
class AreaController extends Controller {

    public function index(Request $request) {
        $areas = Area::orderBy('id', 'DESC')->paginate(5);
        return view('area.index', compact('areas'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create() {
        $coordenador = Professor::join('coordenacaos', 'professors.id', '=', 'coordenacaos.fk_professor')
                ->where('coordenacaos.tipo_coordenacao', '=', 'Área')
                ->lists('professors.nome_professor', 'professors.id');
        $departamentos = Departamento::lists('nome', 'id');
        return view('area.create', compact('departamentos', 'coordenador'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nome' => 'required:|max:45',
            'fk_departamento' => 'required',
        ]);


        $campos = $request->all();


        $id_coordenacao = Professor::join('coordenacaos', 'professors.id', '=', 'coordenacaos.fk_professor')
                        ->select('coordenacaos.id')->where('fk_professor', '=', $request->input('fk_coordenador'))->getBindings();

        //$fk_coordenacao = Coordenacao::select('id')->where('fk_professor', '=', $request->input('fk_coordenador'))->getBindings();
        $str = implode("", $id_coordenacao); //transformando array para string
        $campos['fk_coordenador'] = $str;
        Area::create($campos);


        return redirect()->route('area.index')
                        ->with('success', 'Área cadastrada com sucesso!');
    }

    public function edit($id) {
        $area = Area::find($id);
        $coordenador = Professor::join('coordenacaos', 'professors.id', '=', 'coordenacaos.fk_professor')
                ->where('coordenacaos.tipo_coordenacao', '=', 'Área')
                ->lists('professors.nome_professor', 'professors.id');
        $departamentos = Departamento::lists('nome', 'id');
        return view('area.edit', compact('area', 'departamentos', 'coordenador'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nome' => 'required',
            'fk_departamento' => 'required'
        ]);

        $campos = $request->all();

        $id_coordenacao = Professor::join('coordenacaos', 'professors.id', '=', 'coordenacaos.fk_professor')
                        ->select('coordenacaos.id')->where('fk_professor', '=', $request->input('fk_coordenador'))->getBindings();

        $str = implode("", $id_coordenacao); //transformando array para string
        $campos['fk_coordenador'] = $str;
       // dd($campos);
        
        Area::find($id)->update($campos);

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
        return view('area.show', compact('area'));
    }

}
