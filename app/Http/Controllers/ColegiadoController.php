<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\colegiado;

class colegiadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $colegiados = colegiado::orderBy('id','DESC')->paginate(5);
        return view('colegiado.index',compact('colegiados'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colegiado.create');
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
            'nome_colegiado' => 'required',
            'sigla_colegiado' => 'required',
            'email_colegiado' => 'required',
            'campus_colegiado' => 'required',
            'fk_coordenador' => 'required',
            'fk_secretario' => 'required',
        ]);

        colegiado::create($request->all());

        return redirect()->route('colegiado.index')
                        ->with('success','colegiado cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colegiado = colegiado::find($id);
        return view('colegiado.show',compact('colegiado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colegiado = colegiado::find($id);
        return view('colegiado.edit',compact('colegiado'));
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
           'nome_colegiado' => 'required',
           'sigla_colegiado' => 'required',
           'email_colegiado' => 'required',
           'campus_colegiado' => 'required',
           'fk_coordenador' => 'required',
           'fk_secretario' => 'required',
        ]);

        colegiado::find($id)->update($request->all());

        return redirect()->route('colegiado.index')
                        ->with('success','colegiado atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        colegiado::find($id)->delete();
        return redirect()->route('colegiado.index')
                        ->with('success','colegiado apagado com sucesso!');
    }
}