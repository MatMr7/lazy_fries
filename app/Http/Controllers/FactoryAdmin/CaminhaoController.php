<?php

namespace App\Http\Controllers\FactoryAdmin;

use App\Http\Controllers\Controller;
use App\Models\Caminhao;

class CaminhaoController extends Controller
{
    public function __index()
    {
        return Caminhao::query()->paginate(request('per_page', 15));
    }
}
