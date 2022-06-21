<?php

namespace App\Http\Controllers;

use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request) {
       /* 
        $contato = new SiteContato();

        $contato->nome = $request->input('nome');
        $contato->telefone  = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        
        //print_r($contato->getAttributes());
        $contato->save();*/
        return view('site.contato',['titulo' => 'Contato (teste)']);
    }

    public function salvar(Request $request){
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' =>'required',
            'motivo_contato' =>'required',
            'mensagem' => 'required|max:4000'
        ]);
    }
}
