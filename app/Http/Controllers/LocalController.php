<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Local;

class LocalController extends Controller
{
     public function index(Request $request)
    {
        $locais = Local::orderBy('id','DESC')->paginate(5);
        return view('local.index',compact('locais'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('local.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome_local' => 'required',
        ]);

        Local::create($request->all());

        return redirect()->route('local.index')
                        ->with('success','Local cadastrado com sucesso!');
    }
    
    public function edit($id)
    {
        $local = Local::find($id);
        return view('local.edit',compact('local'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome_local' => 'required',
        ]);

        Local::find($id)->update($request->all());

        return redirect()->route('local.index')
                        ->with('success','Local atualizado com sucesso!');
    }
}
