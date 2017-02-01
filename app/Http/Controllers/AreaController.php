<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\AreadeAtuacao;
use Illuminate\Http\Request;


/**
 * Description of AreaController
 *
 * @author Lucas
 */
class AreaController extends Controller {


    public function index(Request $request) {
        $areas = AreadeAtuacao::orderBy('id', 'DESC')->paginate(5);
        return view('area.index', compact('areas'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create() {
        
        return view('area.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nome_area' => 'required'
        ]);


        $campos = $request->all();
        AreadeAtuacao::create($campos);


        return redirect()->route('area.index')
                        ->with('success', 'Área de atuação cadastrada com sucesso!');
    }

    public function edit($id) {
        $area = AreadeAtuacao::find($id);
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nome_area' => 'required',
        ]);

        $campos = $request->all();
        Area::find($id)->update($campos);

        return redirect()->route('area.index')
                        ->with('success', 'Área de atuação atualizada com sucesso!');
    }

    public function destroy($id) {
        AreadeAtuacao::find($id)->delete();
        return redirect()->route('area.index')
                        ->with('success', 'Área de atuação excluída com sucesso!');
    }

    public function show($id) {
        $area = AreadeAtuacao::find($id);
        return view('area.show', compact('area'));
    }

}
