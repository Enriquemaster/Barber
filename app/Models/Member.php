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

    public function administrador()
    {
        return $this->belongsTo(Administrador::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
