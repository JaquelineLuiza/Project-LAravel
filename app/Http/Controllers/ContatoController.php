<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contatos = [
            (object)['nome'=>'Maria', 'tel'=>'991275803'],
            (object)['nome'=>'Pedro', 'tel'=>'348512619'],
        ];
        $contato = new Contato();
        dd($contato->lista());

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){
        dd($req['nome']);
        return "Esse é o criar do ContatoController";
    }

    public function editar(){
        return "Esse é o editar do ContatoController";
    }
}
