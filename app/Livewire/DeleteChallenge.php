<?php

namespace App\Livewire;

use App\Http\Controllers\MemberController;
use App\Models\Member;
use Livewire\Component;

class DeleteChallenge extends Component
{
    public function render()
    {
//        return view('livewire.delete-challenge');
        return <<<'HTML'
        <div class="flex items-center justify-center">

            <button wire:click="$toggle('modal')" class=" px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest focus:bg-payneGray active:bg-payneGray focus:outline-none focus:ring-2 focus:ring-oxford focus:ring-offset-2 transition ease-in-out duration-150 bg-payneGray bg-[#a8dadc] ">
            Eliminar clase </button>

            <x-confirmation-modal wire:model="modal">
                <x-slot:title>
                    <h1 class="text-2xl font-bold text-oxford ">Eliminación de una clase</h1>
                </x-slot:title>
                <x-slot:content>
                    <p class="text-xl">Esto borrará la clase y no es recuperable.</p>
                    <p class="text-xl">¿Está seguro de hacerlo?</p>
                </x-slot:content>
                <x-slot:footer>
                    <x-button wire:click="confirmarEliminacion()" class="px-4 py-5">Eliminar la clase</x-button>
                </x-slot:footer>
            </x-confirmation-modal>
        </div>

        HTML;
    }

    // Propiedades del componente
    public $modal=false;
    public $clase;

    // Método para inicializar el componente con datos
    public function mount($id){
        // Busca la clase por su ID y la almacena en la propiedad $clase
        $this->clase=MemberController::find($id);
    }

    // Método para confirmar la eliminación de la clase
    public function confirmarEliminacion(){
        $this->clase->delete();
        $this->modal=false;
        $this->redirect('/dashboard');
    }
}
