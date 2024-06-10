<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Citas;
use Livewire\WithFileUploads;

class AddCita extends Component
{
    use WithFileUploads;

    public $modal = false;
    public $servicio = '';
    public $barbero = '';
    public $fecha = '';
    public $agree = false;

    protected $rules = [
        'servicio' => 'required|string|max:255',
        'barbero' => 'required|string|max:255',
        'fecha' => 'required|date',
        'agree' => 'required' // Validamos que el checkbox esté marcado
    ];

    public function render()
    {
        return view('livewire.add-cita');
    }

    public function save()
    {
        $this->validate();

        // Verificar si el checkbox está marcado
        if (!$this->agree) {
            $this->addError('agree', 'Debes aceptar los términos y condiciones.');
            return;
        }

        // Obtener el usuario autenticado
        $user = User::findOrFail(Auth::id());

        // Crear la cita asociada al usuario
        $user->citas()->create([
            'servicio' => $this->servicio,
            'barbero' =>  $this->barbero,
            'fecha' =>  $this->fecha,
        ]);

        // Reseteamos los campos del formulario y ocultamos el modal
        $this->modal = false;
        $this->reset(['servicio', 'barbero', 'fecha', 'agree']);
        session()->flash('status', 'Cita creada exitosamente.');
        $this->redirect('/dashboard');
    }
}
