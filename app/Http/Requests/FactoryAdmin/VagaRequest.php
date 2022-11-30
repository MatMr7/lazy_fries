<?php

namespace App\Http\Requests\FactoryAdmin;

use Illuminate\Foundation\Http\FormRequest;

class VagaRequest extends FormRequest
{

    public function rules()
    {
        return [
            'position_X' => 'required',
            'position_Y' => 'required'
        ];
    }
}
