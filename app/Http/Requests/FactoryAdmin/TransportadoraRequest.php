<?php

namespace App\Http\Requests\FactoryAdmin;

use Illuminate\Foundation\Http\FormRequest;

class TransportadoraRequest extends FormRequest
{
    public function rules()
    {
        return [
            'cnpj' => 'required',
            'address' => 'required',
            'region' => 'required'
        ];
    }
}
