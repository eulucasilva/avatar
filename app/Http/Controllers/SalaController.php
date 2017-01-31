<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sala;
use App\Local;

class SalaController extends Controller
{
    public function index(Request $request)
    {
        $salas = Sala::orderBy('id','DESC')->paginate(5);
        return view('sala.index',compact('salas'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $locais = Local::lists('nome_local','id');
        return view('sala.create', compact('locais'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome_sala' => 'required',
            'fk_local' => 'required',
        ]);

        Sala::create($request->all());

        return redirect()->route('sala.index')
                        ->with('success','Sala cadastrada com sucesso!');
    }
    
    public function edit($id)
    {
        $sala = Sala::find($id);
        $locais = Local::lists('nome_local','id');
        return view('sala.edit',compact('sala', 'locais'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome_sala' => 'required',
            'fk_local' => 'required',
        ]);

        Sala::find($id)->update($request->all());

        return redirect()->route('sala.index')
                        ->with('success','Sala atualizada com sucesso!');
    }
    
    public function show($id)
    {
        $sala = Sala::find($id);
        return view('sala.show',compact('sala'));
    }
}