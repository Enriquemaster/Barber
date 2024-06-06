<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = 'tb_services'; // Nombre de la tabla

    protected $fillable = [
        'corte',
        'descripccion',
        'precio',
    ];

}
