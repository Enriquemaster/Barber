<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\membership_owner;

class EliminarMembresia extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
            <button wire:click="$toggle('modal')" class="bg-zinc-800 text-white py-1 px-2 rounded-lg  ">
            Eliminar </button>

            <x-confirmation-modal wire:model="modal">
                <x-slot:title>
                    <h1 class="text-2xl font-bold text-black ">Eliminar Membresia</h1>
                </x-slot:title>
                <x-slot:content>
                    <p class="text-xl">Esto borrará la Membresia con el usuario asociado y ya no sera cliente premium.</p>
                    <p class="text-xl">¿Está seguro de hacerlo?</p>
                </x-slot:content>
                <x-slot:footer>
                    <x-button wire:click="confirmar()">Eliminar Membresia</x-button>
                </x-slot:footer>
            </x-confirmation-modal>
        </div>
        HTML;
    }

    public $modal=false;
    public $memberships;

    public function mount($id){
        $this->memberships=membership_owner::find($id);

    }

    
    public function confirmar(){

        // Obtener el usuario asociado a la membresía
    $user = $this->memberships->user;

    // Quita el rol "Cliente Premium" al usuario
    $user->removeRole('Cliente-premium');

    // Agrega el rol "Cliente" al usuario
    $user->assignRole('Cliente');


        $this->memberships->delete();
        $this->modal=false;
        $this->redirect('/accionesMembresias');
    }

}
