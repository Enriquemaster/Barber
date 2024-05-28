<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'recompensa',
        'fecha_inicio',
        'fecha_final',
        'image_url',
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
