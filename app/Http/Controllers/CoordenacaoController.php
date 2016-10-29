<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coordenacao;
use App\User;
use App\Professor;

class coordenacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $coordenacaos = Coordenacao::orderBy('id','DESC')->paginate(5);
        return view('coordenacao.index',compact('coordenacaos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professores = Professor::lists('nome_professor', 'id');
        return view('coordenacao.create', compact('professores','usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tipo_coordenacao' => 'required',
            'portaria_nomeacao_coordenacao' => 'required',
            'inicio_mandato_coordenacao' => 'required',
            'termino_mandato_coordenacao' => 'required',
            'fk_professor' => 'required',
        ]);

        coordenacao::create($request->all());

        return redirect()->route('coordenacao.index')
                        ->with('success','coordenacao cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coordenacao = coordenacao::find($id);
        return view('coordenacao.show',compact('coordenacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $coordenacao = coordenacao::find($id);
         $professores = Professor::lists('nome_professor', 'id');
         return view('coordenacao.edit', compact('coordenacao','professores','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tipo_coordenacao' => 'required',
            'portaria_nomeacao_coordenacao' => 'required',
            'inicio_mandato_coordenacao' => 'required',
            'termino_mandato_coordenacao' => 'required',
            'fk_professor' => 'required',
        ]);

        coordenacao::find($id)->update($request->all());

        return redirect()->route('coordenacao.index')
                        ->with('success','coordenacao atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        coordenacao::find($id)->delete();
        return redirect()->route('coordenacao.index')
                        ->with('success','coordenacao apagado com sucesso!');
    }
}