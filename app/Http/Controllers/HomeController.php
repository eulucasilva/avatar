<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Departamento;
use App\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { //return view('home');

       $user = Auth::user();
       $role;

       if(!empty($user->roles)){
                foreach($user->roles as $v){
                    $role = $v->name ;
                }

            if($role == "Administrador Sistema"){ return view('telasIniciais.TelaInicialAdministrador');} 
            else if($role == "Coordenador Colegiado"){ return view('telasIniciais.TelaInicialCoordenadoColegiado');}
            else if($role == "Coordenador Área"){ return view('telasIniciais.TelaInicialCoordenadorArea');}
            else if($role == "Coordenador Departamento"){ return view('telasIniciais.TelaInicialCoordenadorDepartamento');}
            else if($role == "Professor"){ return view('telasIniciais.TelaInicialProfessor');}
            else if($role == "Secretario Colegiado"){ return view('telasIniciais.TelaInicialSecretarioColegiado');}
            else if($role == "Secretario Departamento"){ return view('telasIniciais.TelaInicialSecretarioDepartamento');}
            else{return view('home');}
        }
        else{
            return view('home');
       }
    }
}