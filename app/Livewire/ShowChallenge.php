<?php

namespace App\Livewire;

use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowChallenge extends Component
{
    public function render()
    {
        {

            $retos = Member::join('challenges', 'challenges.id', '=', 'members.challenge_id')
                ->select('members.*', 'challenges.titulo', 'challenges.descripcion', 'challenges.recompensa', 'challenges.fecha_inicio', 'challenges.fecha_final')
                ->whereNotNull('members.challenge_id')
                ->get();


            return view('livewire.show-challenge', compact('retos'));
        }
    }
}
