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
        return ServicoResource::collection($servicos);
    }

    public function store(StoreServicoRequest $request)
    {
        $servicos = Servico::create($request->all());

        return new ServicoResource($servicos);
    }
}
