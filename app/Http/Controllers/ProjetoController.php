<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projeto;
use App\Professor;
use DB;
use Hash;

class ProjetoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $data = Projeto::orderBy('id', 'DESC')->paginate(5);
        return view('projeto.index', compact('data'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $professors = Professor::lists('nome', 'id');
        return view('projeto.create', compact('professors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
                        'titulo' => 'required',
                        'objetivoGeral' => 'required',
			'fk_professor' => 'required',
			'objetivoEspec' => 'required',
			'resultadosEsperados' => 'required',
			'financiamento' => 'required',
			'tipoPesquisa' => 'required',
			'fonteFinanciamento' => 'required',
			'grupoPesquisaProjeto' => 'required',
        ]);

       
        Projeto::create($request->all());

           

        return redirect()->route('projeto.index')
                        ->with('success', 'Projeto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $projeto = Projeto::find($id);
        return view('projeto.show', compact('projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $projeto = Projeto::find($id);
             

        return view('projeto.edit', compact('projeto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'titulo' => 'required',
            'objetivoGeral' => 'required',
			'fk_professor' => 'required',
			'objetivoEspec' => 'required',
			'resultadosEsperados' => 'required',
			'financiamento' => 'required',
			'tipoPesquisa' => 'required',
			'fonteFinanciamento' => 'required',
			'grupoPesquisaProjeto' => 'required',
        ]);

        $input = $request->all();
        
        $projeto = Projeto::find($id);
        $projeto->update($input);
        


        

        return redirect()->route('projeto.index')
                        ->with('success', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Projeto::find($id)->delete();
        return redirect()->route('projeto.index')
                        ->with('success', 'Usuário excluído com sucesso!');
    }

}
