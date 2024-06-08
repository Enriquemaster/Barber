<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ShowPromotions extends Component
{
    public function render()
    {
        $promotions = Member::join('promotions', 'promotions.id', '=', 'members.promotion_id')
            ->select('members.*', 'promotions.titulo', 'promotions.descripcion', 'promotions.fecha_inicio', 'promotions.fecha_final')
            ->whereNotNull('members.promotion_id')
            ->get();


        return view('livewire.show-promotions', compact('promotions'));
    }
}
