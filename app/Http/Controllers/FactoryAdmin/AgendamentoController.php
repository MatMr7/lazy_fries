<?php

namespace App\Http\Controllers\FactoryAdmin;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use App\Models\Transportadora;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgendamentoController extends Controller
{
    public function index()
    {
        return Agendamento::query()->paginate(request('per_page', 15));
    }

    public function store(Request $request)
    {
        $agendamento = Agendamento::query()->create([
            'transportadora_id' => request('transportadora_id'),
            'vaga_id' => request('vaga_id'),
            'destino' => request('destino'),
            'data' => Carbon::parse(request('data')),
            'type_agendamento_id' => request('type_agendamento_id'),
            'detalhes' => request('detalhes')
        ]);

        return response()->json([
            'data' => $agendamento
        ], Response::HTTP_CREATED);
    }


    public function show(Agendamento $agendamento)
    {
        return response()->json([
            'data' => $agendamento
        ]);
    }


    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
