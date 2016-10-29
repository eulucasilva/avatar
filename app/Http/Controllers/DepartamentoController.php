<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Departamento;
use App\Secretario;
use App\Professor;
use App\User;
use DB;
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
        $coordenador = Professor::join('coordenacaos', 'professors.id', '=', 'coordenacaos.fk_professor')
                ->where('coordenacaos.tipo_coordenacao', '=', 'Departamento')
                ->lists('professors.nome_professor', 'professors.id');
        $usuarios = User::lists('name', 'id');
        return view('departamento.create', compact('secretario', 'coordenador', 'usuarios'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nome' => 'required|max:45',
            'sigla' => 'required|max:10',
            'email' => 'required|email|unique:users,email|max:30',
            'campus' => 'required',
            'fk_secretario' => 'required',
            'fk_usuario' => 'required'
        ]);

        $campos = $request->all();
        $campos['fk_coordenador'] = null;

        if ($request->input('fk_coordenador') != null) {
            $campos = $request->all();

            //busca a chave da coordenaçção, comparando as chaves do professor com a chave estrangeira de professor na tabela coordenação
            $id_coordenacao = DB::table('professors')->join('coordenacaos', 'professors.id', '=', 'coordenacaos.fk_professor')
                    ->select('coordenacaos.id')
                    ->where('coordenacaos.fk_professor', '=', $request->input('fk_coordenador'))
                    ->lists('id');

            $campos['fk_coordenador'] = (string) $id_coordenacao[0];
        }

        Departamento::create($campos);

        return redirect()->route('departamento.index')
                        ->with('success', 'Departamento cadastrado com sucesso!');
    }

    public function edit($id) {
        $secretario = Secretario::lists('nome_secretario', 'id');
        $coordenador = Professor::join('coordenacaos', 'professors.id', '=', 'coordenacaos.fk_professor')
                ->where('coordenacaos.tipo_coordenacao', '=', 'Departamento')
                ->lists('professors.nome_professor', 'professors.id');
        $usuarios = User::lists('name', 'id');
        $departamento = Departamento::find($id);
        return view('departamento.edit', compact('departamento', 'secretario', 'coordenador', 'usuarios'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nome' => 'required|max:45',
            'sigla' => 'required|max:10',
            'email' => 'required|max:30',
            'campus' => 'required',
            'fk_secretario' => 'required',
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
        Departamento::find($id)->update($campos);

        return redirect()->route('departamento.index')
                        ->with('success', 'Departamento atualizado com sucesso!');
    }

    public function destroy($id) {
        try {
            Departamento::find($id)->delete();
        } catch (QueryException $ex) {
            
        }
        //Departamento::find($id)->delete();
        return redirect()->route('departamento.index')
                        ->with('success', 'Departamento excluído com sucesso!');
    }

    public function show($id) {
        $departamento = Departamento::find($id);
        return view('departamento.show', compact('departamento'));
    }

}
