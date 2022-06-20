<?php

namespace App\Http\Controllers;
     
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 =>  ['nome' => 'Fornecedor 1',
                   'status' => 'N',
                   'cnpj' => 'xyz',
                   'ddd' => '11',
                   'Telefone' => '9999-9999'
            ],
            1 => ['nome' => 'Fornecedor 2',
                  'status' => 'S',
                  'cnpj' => null,
                  'ddd' => '85',
                  'Telefone' => '9999-9999'
                 ],
            2 => ['nome' => 'Fornecedor 3',
                  'status' => 'S',
                  'cnpj' => null,
                  'ddd' => '48',
                  'Telefone' => '9999-9999'
                ],

        ];

        $fornecedores = [];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
