<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        return response()->json($servicos);
    }

    public function store(Request $request)
    {
        // Validação
        $request->validate([
            'nome' => 'required',
            'valor' => 'required',
            'descricao' => 'required',
        ]); 

        // Salvar no BD
        $servico = Servico::create([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'descricao' => $request->descricao,
        ]);

        // Devolver resposta
        return response()->json($servico);
    }
}
