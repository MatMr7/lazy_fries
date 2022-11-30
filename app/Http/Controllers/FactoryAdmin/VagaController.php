<?php

namespace App\Http\Controllers\FactoryAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FactoryAdmin\VagaRequest;
use App\Models\Vaga;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VagaController extends Controller
{
    public function index()
    {
        return Vaga::query()->paginate(request('per_page', 15));
    }


    public function store(VagaRequest $request): \Illuminate\Http\JsonResponse
    {
        $vaga = Vaga::query()->create([
            'position_X' => request('position_X'),
            'position_Y' => request('position_Y')
        ]);

        return response()->json([
            'data' => $vaga
        ], Response::HTTP_CREATED);
    }


    public function destroy(Vaga $vaga)
    {
        $vaga->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
