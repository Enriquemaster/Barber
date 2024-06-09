<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Citas extends Model
{
    use HasFactory;
    protected $fillable = [
        'servicio',
        'barbero',
        'fecha',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_cita', 'cita_id', 'user_id')->withTimestamps();
    }

}
