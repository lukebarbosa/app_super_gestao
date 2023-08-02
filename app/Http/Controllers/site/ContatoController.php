<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function index()
    {
        return view('site.contato');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string',
            'telefone' => 'required|string',
            'email' => 'required|email',
            'motivo_contato' => 'required|string',
            'mensagem' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        return response()->json([
            'message' => 'User created successfully.',
        ], 200);
    }
}
