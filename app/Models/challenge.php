<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'recompensa',
        'fecha_inicio',
        'fecha_final',
    ];

    public function Memeber()
    {
        return $this->hasMany(Member::class);
    }

}
