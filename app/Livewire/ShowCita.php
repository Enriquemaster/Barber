<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ShowCita extends Component
{
    public function render($user_id)
    {

        $citas = User::join('user_cita', 'users.id', '=', 'user_cita.user_id')
            ->join('citas', 'citas.id', '=', 'user_cita.cita_id')
            ->select('users.*', 'citas.servicio', 'citas.barbero', 'citas.fecha')
            ->where('users.id', $user_id)
            ->get();

        // Pasar los datos a la vista
        return view('livewire.show-cita', compact('citas'));
    }
}
