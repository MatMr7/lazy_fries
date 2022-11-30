<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAgendamento extends Model
{
    public const CARGA = 1;
    public const DESCARGA = 2;

    use HasFactory;
}
