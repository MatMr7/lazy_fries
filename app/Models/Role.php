<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const FACTORY_ADMIN = 1;
    const MANAGER = 2;
    const DRIVER = 3;
    const FACTORY_EMPLOYEE = 4;
    const SHIPPING_EMPLOYEE = 5;
    const SHIPPING_ADMIN = 6;

    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];
}
