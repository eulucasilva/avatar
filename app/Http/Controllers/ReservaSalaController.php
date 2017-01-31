<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ReservaSala;

class ReservaSalaController extends Controller
{
    public function index(Request $request)
    {
        $reservas = ReservaSala::orderBy('id','DESC')->paginate(5);
        return view('reservasala.index',compact('reservas'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $salas = Sala::lists('nome_sala','id');
        return view('reservasala.create', compact('salas'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'objetivo_reserva' => 'required',
            'horaInicio_reserva' => 'required',
            'horaFim_reserva' => 'required',
            'data_reserva' => 'required',
            'fk_sala' => 'required'
        ]);

        ReservaSala::create($request->all());

        return redirect()->route('reservasala.index')
                        ->with('success','Sala reservada com sucesso!');
    }
    
    public function edit($id)
    {
        $reservasala = ReservaSala::find($id);
        $salas = Sala::lists('nome_sala','id');
        return view('sala.edit',compact('reservasala', 'salas'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'objetivo_reserva' => 'required',
            'horaInicio_reserva' => 'required',
            'horaFim_reserva' => 'required',
            'data_reserva' => 'required',
            'fk_sala' => 'required'
        ]);

        ReservaSala::find($id)->update($request->all());

        return redirect()->route('reservasala.index')
                        ->with('success','Reserva editada com sucesso!');
    }
    
    public function show($id)
    {
        $reservasala = ReservaSala::find($id);
        return view('reservasala.show',compact('reservasala'));
    }
}
