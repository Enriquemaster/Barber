<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowChallenge extends Component
{
    public function render()
    {
        {
            $retos = DB::table('challenges')
                ->join('challenges as c', 'c.id', '=', 'members.challenge_id')
                ->select('members.*', 'c.titulo', 'c.descripcion', 'c.recompensa', 'c.fecha_inicio', 'c.fecha_final')
                ->whereNotNull('members.challenge_id')
                ->get();

            return view('livewire.show-challenge', compact('retos'));
        }
    }
}
