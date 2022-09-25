<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServicoRequest;
use App\Http\Resources\ServicoResource;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        return response()->json($servicos);
    }

    public function store(StoreServicoRequest $request)
    {
        $servicos = Servico::create($request->all());

        return new ServicoResource($servicos);
    }
    
    public function update(StoreServicoRequest $request, Servico $servico)
    {
        $servico->update($request->all());
        
        return new ServicoResource($servico);
    }
    
    public function destroy(Servico $servico)
    {
        $servico->delete();

        return response(null, 204);
    }
}
