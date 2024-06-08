<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha_inicio',
        'fecha_final',
        'imagen',
    ];

    public function Memeber()
    {
        return $this->hasMany(Member::class);
    }

}

