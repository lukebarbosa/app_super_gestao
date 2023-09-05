<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::onlyTrashed()->get();

        return $fornecedores;
//        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
