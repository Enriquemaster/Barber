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
//            $retos = DB::table('members')
//                ->join('challenges as c', 'c.id', '=', 'members.challenge_id')
//                ->select('members.*', 'c.titulo', 'c.descripcion', 'c.recompensa', 'c.fecha_inicio', 'c.fecha_final')
//                ->whereNotNull('members.challenge_id')
//                ->get();

            $retos = Member::join('challenges', 'challenges.id', '=', 'members.challenge_id')
                ->select('members.*', 'challenges.titulo', 'challenges.descripcion', 'challenges.recompensa', 'challenges.fecha_inicio', 'challenges.fecha_final')
                ->whereNotNull('members.challenge_id')
                ->get();


            return view('livewire.show-challenge', compact('retos'));
        }
    }
}
