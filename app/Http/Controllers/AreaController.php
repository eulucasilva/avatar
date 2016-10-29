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
use App\Professor;
use App\Departamento;
use App\USer;

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
        $usuarios = User::lists('name', 'id');
        return view('area.create', compact('departamentos', 'coordenador', 'usuarios'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nome' => 'required:|max:45',
            'fk_departamento' => 'required',
            'fk_usuario' => 'required'
        ]);


        $campos = $request->all();
        $campos['fk_coordenador'] = null;

        if ($request->input('fk_coordenador') != null) {
            //busca a chave da coordenaçção, comparando as chaves do professor com a chave estrangeira de professor na tabela coordenação
            $id_coordenacao = DB::table('professors')->join('coordenacaos', 'professors.id', '=', 'coordenacaos.fk_professor')
                    ->select('coordenacaos.id')
                    ->where('coordenacaos.fk_professor', '=', $request->input('fk_coordenador'))
                    ->lists('id');

            $campos['fk_coordenador'] = (string) $id_coordenacao[0];
        }
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
        $usuarios = User::lists('name', 'id');
        return view('area.edit', compact('area', 'departamentos', 'coordenador', 'usuarios'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nome' => 'required',
            'fk_departamento' => 'required',
            'fk_usuario' => 'required'
        ]);

        $campos = $request->all();
        if ($request->input('fk_coordenador') != null) {
            //busca a chave da coordenaçção, comparando as chaves do professor com a chave estrangeira de professor na tabela coordenação
            $id_coordenacao = DB::table('professors')->join('coordenacaos', 'professors.id', '=', 'coordenacaos.fk_professor')
                    ->select('coordenacaos.id')
                    ->where('coordenacaos.fk_professor', '=', $request->input('fk_coordenador'))
                    ->lists('id');

            $campos['fk_coordenador'] = (string) $id_coordenacao[0];
        }
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
