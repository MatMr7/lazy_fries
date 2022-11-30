<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'transportadora_id',
        'vaga_id',
        'destino',
        'data',
        'type_agendamento_id',
        'detalhes'
    ];
}
