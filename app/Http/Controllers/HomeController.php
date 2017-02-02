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
      

       if(!empty($user->roles)){ 
                $role;
                foreach($user->roles as $v){
                    $role = $v->name ;
                }

            if($role == "Administrador do Sistema"){ return view('telasIniciais.TelaInicialAdministrador');} 
            else if($role == "Coordenador"){ return view('telasIniciais.TelaInicialCoordenador');}
            else if($role == "Secretaria"){ return view('telasIniciais.TelaInicialSecretaria');}
            else if($role == "Professor"){ return view('telasIniciais.TelaInicialProfessor');}
            else{return view('home');}
        }
        else{
            return view('home');
       }
    }
}