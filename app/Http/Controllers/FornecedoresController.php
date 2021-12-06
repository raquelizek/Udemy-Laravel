<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'CNPJ' => '0000',
                'ddd' => '11', //São Paulo (SP)
                'telefone' => '95852154'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'CNPJ' => null,
                'ddd' => '85', //Fortaleza (CE)
                'telefone' => '54561454'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'CNPJ' => '063300',
                'ddd' => '32', //Juiz de Fora - MG
                'telefone' => '884451552'
            ]
        ];
        return view('aplicação.fornecedores.index')->with('fornecedores', $fornecedores);
    }
}
