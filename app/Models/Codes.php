<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{
    use HasFactory;

    protected $table = 'tb_premium_codes'; // Nombre de la tabla

    protected $fillable = [
        'code',
    ];

}


