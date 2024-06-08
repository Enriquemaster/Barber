<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Services;

class BtnEliminarServices extends Component
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
                    <h1 class="text-2xl font-bold text-black ">Eliminar servicio</h1>
                </x-slot:title>
                <x-slot:content>
                    <p class="text-xl">Esto borrará el servicio y no es recuperable.</p>
                    <p class="text-xl">¿Está seguro de hacerlo?</p>
                </x-slot:content>
                <x-slot:footer>
                    <x-button wire:click="confirmar()">Eliminar el servicio</x-button>
                </x-slot:footer>
            </x-confirmation-modal>
        </div>

        HTML;
    }

    public $modal=false;
    public $service;

    public function mount($id){
        $this->service=Services::find($id);
    }

    public function confirmar(){
        $this->service->delete();
        $this->modal=false;
        $this->redirect('/accionesServicios');
    }
}
