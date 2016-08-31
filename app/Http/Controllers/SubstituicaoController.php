<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Substituicao;
use App\Professor;

class substituicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $substituicaos = Substituicao::orderBy('id','DESC')->paginate(5);
        return view('substituicao.index',compact('substituicaos'))
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
        return view('substituicao.create', compact('professores'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'inicio_substituicao' => 'required',
            'fim_substituicao' => 'required',
            'motivo_substituicao' => 'required',
            'portaria_substituicao' => 'required',
            'numcop_substituicao' => 'required',
            'fk_professor_substituido' => 'required',
            'fk_professor_substituto' => 'required',
        ]);

        substituicao::create($request->all());

        return redirect()->route('substituicao.index')
                        ->with('success','Substituição cadastrado com sucesso!');
    }

    public function show($id)
    {
        $substituicao = substituicao::find($id);
        return view('substituicao.show',compact('substituicao'));
    }

    public function edit($id)
    {
        
         $substituicao = substituicao::find($id);
         $professores = Professor::lists('nome_professor', 'id');
         return view('substituicao.edit', compact('substituicao','professores'));
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
            'inicio_substituicao' => 'required',
            'fim_substituicao' => 'required',
            'motivo_substituicao' => 'required',
            'portaria_substituicao' => 'required',
            'numcop_substituicao' => 'required',
            'fk_professor_substituido' => 'required',
            'fk_professor_substituto' => 'required',
        ]);

        substituicao::find($id)->update($request->all());

        return redirect()->route('substituicao.index')
                        ->with('success','Substituicao atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        substituicao::find($id)->delete();
        return redirect()->route('substituicao.index')
                        ->with('success','substituicao excluído com sucesso!');
    }
}