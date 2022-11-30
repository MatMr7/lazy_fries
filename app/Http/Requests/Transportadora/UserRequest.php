<?php

namespace App\Http\Requests\Transportadora;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => ['required'],
            'password' => ['required'],
            'cpf' => ['required', 'unique:users,cpf']
        ];
    }
}
