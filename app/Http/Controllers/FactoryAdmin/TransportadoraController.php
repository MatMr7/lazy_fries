<?php

namespace App\Http\Controllers\FactoryAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FactoryAdmin\TransportadoraRequest;
use App\Models\Transportadora;
use Symfony\Component\HttpFoundation\Response;

class TransportadoraController extends Controller
{
    public function index()
    {
        return Transportadora::query()->paginate(request('per_page', 15));
    }

    public function store(TransportadoraRequest $request)
    {
        $transportadora = Transportadora::query()->create([
            'cnpj' => request('cnpj'),
            'address' =>  request('address'),
            'region' => request('region')
        ]);

        return response()->json([
            'data' => $transportadora
        ], Response::HTTP_CREATED);
    }

    public function update(Transportadora $transportadora, TransportadoraRequest $transportadoraRequest)
    {
        $transportadora->update([
            'cnpj' => request('cnpj'),
            'address' => request('address'),
            'region' => request('region')
        ]);

        return response()->json([
            'data' => $transportadora->refresh()
        ], Response::HTTP_CREATED);
    }

    public function show(Transportadora $transportadora)
    {
        return response()->json([
            'data' => $transportadora
        ]);
    }

    public function destroy(Transportadora $transportadora)
    {
        $transportadora->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
