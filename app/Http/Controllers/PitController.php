<?php


namespace App\Http\Controllers;

use App\Pit;
use Illuminate\Http\Request;
use App\Professor;
use App\PeriodoLetivo;


class PitController extends Controller {

    public function index(Request $request) {
        $pits = Pit::orderBy('id', 'DESC')->paginate(5);
        return view('pit.index', compact('pits'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $professores = Professor::lists('nome_professor', 'id');
        $periodoLetivo = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
       
        return view('pit.create', compact('professores','periodoLetivo'));
    }
    public function store(Request $request) {
        $this->validate($request, [
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
            'campo1' => 'required',
            'campo2' => 'required',
            'campo3' => 'required',
            'campo4' => 'required',
            'campo5'  => 'required',
            'campo6'  => 'required',
            'campo7'  => 'required',
            'campo8'  => 'required',
            'campo9'  => 'required',
            'campo10' => 'required',
            'campo11' => 'required',
            'campo12' => 'required',
            'campo13' => 'required',
            'campo14' => 'required',
            'campo15' => 'required',
            'campo16' => 'required',
            'campo17' => 'required',
            'campo18' => 'required',
            'campo19' => 'required',
            'campo20' => 'required',
            'campo21' => 'required',
            'campo22' => 'required',
            'campo23' => 'required',
            'campo24' => 'required',
            'campo25' => 'required',
            'campo26' => 'required',
            'campo27' => 'required',
            'campo28' => 'required',
            'campo29' => 'required',
            'campo30' => 'required',
            'campo31' => 'required',
            'campo32' => 'required',
            'campo33' => 'required',
            'campo34' => 'required',
            'campo35' => 'required',
            'campo36' => 'required',
            'campo37' => 'required',
            'campo38' => 'required',
            'campo39' => 'required',
            'campo40' => 'required',
            'campo41' => 'required',
            'campo42' => 'required',
            'campo43' => 'required',
            'campo44' => 'required',
            'campo45' => 'required',
            'campo46' => 'required',
        ]);
        
        Pit::create($request->all());

        return redirect()->route('pit.index')
                        ->with('success', 'Pit cadastrado com sucesso!');
    }

    public function show($id)
    {
        $pit = Pit::find($id);
        return view('pit.show',compact('pit'));
    }
    
    public function edit($id) {
        $pit = Pit::find($id);
        $periodoLetivo = PeriodoLetivo::lists('periodo_periodoLetivo', 'id');
        $professores = Professor::lists('nome_professor', 'id');
               
        return view('pit.edit', compact('pit', 'periodoLetivo','professores'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'fk_periodo_letivo' => 'required',
            'fk_professor' => 'required',
            'campo1' => 'required',
            'campo2' => 'required',
            'campo3' => 'required',
            'campo4' => 'required',
            'campo5'  => 'required',
            'campo6'  => 'required',
            'campo7'  => 'required',
            'campo8'  => 'required',
            'campo9'  => 'required',
            'campo10' => 'required',
            'campo11' => 'required',
            'campo12' => 'required',
            'campo13' => 'required',
            'campo14' => 'required',
            'campo15' => 'required',
            'campo16' => 'required',
            'campo17' => 'required',
            'campo18' => 'required',
            'campo19' => 'required',
            'campo20' => 'required',
            'campo21' => 'required',
            'campo22' => 'required',
            'campo23' => 'required',
            'campo24' => 'required',
            'campo25' => 'required',
            'campo26' => 'required',
            'campo27' => 'required',
            'campo28' => 'required',
            'campo29' => 'required',
            'campo30' => 'required',
            'campo31' => 'required',
            'campo32' => 'required',
            'campo33' => 'required',
            'campo34' => 'required',
            'campo35' => 'required',
            'campo36' => 'required',
            'campo37' => 'required',
            'campo38' => 'required',
            'campo39' => 'required',
            'campo40' => 'required',
            'campo41' => 'required',
            'campo42' => 'required',
            'campo43' => 'required',
            'campo44' => 'required',
            'campo45' => 'required',
            'campo46' => 'required'
            ]);
        Pit::find($id)->update($campos);

        return redirect()->route('pit.index')
                        ->with('success', 'Pit atualizada com sucesso!');
    }

    public function destroy($id) {
        Pit::find($id)->delete();
        return redirect()->route('pit.index')
                        ->with('success', 'Pit excluída com sucesso!');
    }

}
