<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    public function create(){
        return view('disciplina.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'codigo' => 'required',
            'ch_total' => 'required',
            'natureza' => 'required'
        ]);

        Disciplina::create($request->all());

        return redirect()->route('disciplina.index')
                        ->with('success','Disciplina criada com sucesso');
    }
}
