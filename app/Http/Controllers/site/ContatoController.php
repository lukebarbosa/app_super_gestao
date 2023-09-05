<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\SiteContato;
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
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string',
            'telefone' => 'required|string',
            'email' => 'required|email',
            'motivo_contato' => 'required|string',
            'mensagem' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors()]);
        }

        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();

        return response()->json([
            'message' => 'Message send successfully.',
        ], 201);
    }
}
