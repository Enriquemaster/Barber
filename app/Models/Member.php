<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'administrador_id',
        'customer_id',
        'challenge_id',
        'promotion_id',
    ];

    public function Administrador()
    {
        return $this->belongsTo(Administrador::class);
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function Challenge()
    {
        return $this->belongsTo(challenge::class);
    }

    public function promotion()
    {
        return $this->belongsTo(promotion::class);
    }

}
