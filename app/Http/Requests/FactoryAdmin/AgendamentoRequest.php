<?php

namespace App\Http\Requests\FactoryAdmin;

use App\Models\Agendamento;
use App\Models\TypeAgendamento;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AgendamentoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'vaga_id' => ['required', 'exists:vagas,id'],
            'transportadora_id' => ['required', 'exists:transportadoras,id'],
            'destino' => ['required'],
            'data' => ['required', 'date_format:Y-m-d H:i:s'],
            'type_agendamento_id' => ['required', Rule::in([
                TypeAgendamento::CARGA,
                TypeAgendamento::DESCARGA
            ])]
        ];
    }
}
