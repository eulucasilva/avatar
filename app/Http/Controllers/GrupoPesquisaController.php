<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\GrupoPesquisa;
use App\Sala;
use App\AreadeAtuacao;

class GrupoPesquisaController extends Controller {

    public function index(Request $request) {
        $grupos = GrupoPesquisa::orderBy('id', 'DESC')->paginate(5);
        return view('grupopesquisa.index', compact('grupos'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create() {

        $salas = Sala::lists('nome_sala', 'id');
        $areas = AreadeAtuacao::lists('nome_area', 'id');
        return view('grupopesquisa.create', compact('salas', 'areas'));
    }

    public function store(Request $request) {
        
        $this->validate($request, [
            'nome_grupo' => 'required',
            'objGeral_grupo' => 'required',
            'linhaPesq_grupo' => 'required',
            'fk_sala' => 'required',
            'areas' => 'required'
        ]);

        
        $grupo = new GrupoPesquisa();
        $grupo->nome_grupo = $request->input('nome_grupo');
        $grupo->objGeral_grupo = $request->input('objGeral_grupo');
        $grupo->linhaPesq_grupo = $request->input('linhaPesq_grupo');
        $grupo->fk_sala =  $request->input('fk_sala');
        $grupo->save();
        
        foreach ($request->input('areas') as $key => $value) {
            $grupo->areas()->attach($value);
        }

        return redirect()->route('grupo.index')
                        ->with('success', 'Grupo de pesquisa cadastrado com sucesso!');
    }

    public function edit($id) {
        $area = AreadeAtuacao::find($id);
        $salas = Sala::lists('nome_sala', 'id');
        return view('grupopesquisa.create', compact('area', 'salas'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nome_grupo' => 'required',
            'objGeral_grupo' => 'required',
            'linhaPesq_grupo' => 'required',
            'fk_sala' => 'required'
        ]);

        $campos = $request->all();
        GrupoPesquisa::find($id)->update($campos);

        return redirect()->route('grupo.index')
                        ->with('success', 'Grupo de pesquisa atualizado com sucesso!');
    }

    public function destroy($id) {
        GrupoPesquisa::find($id)->delete();
        return redirect()->route('grupo.index')
                        ->with('success', 'Grupo de pesquisa excluído com sucesso!');
    }

    public function show($id) {
        $grupo = GrupoPesquisa::find($id);
        return view('grupopesquisa.show', compact('grupo'));
    }

}
