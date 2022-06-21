<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>  [
                'nome'=>'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd'=> 0,
                'telefone' => '0000-000'
            ],
            1 =>[
                'nome'=>'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '0',
                'ddd'=> '85',
                'telefone' => '0000-000'
            ],
            2 =>[
                'nome'=>'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '0',
                'ddd'=> '32',
                'telefone' => '0000-000'
            ],
        ];
        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
