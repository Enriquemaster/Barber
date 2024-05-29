<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Products;

class DeleteProduct extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
            <button wire:click="$toggle('modal')" class=" px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest focus:bg-payneGray active:bg-payneGray focus:outline-none focus:ring-2 focus:ring-oxford focus:ring-offset-2 transition ease-in-out duration-150 bg-payneGray bg-[#a8dadc] ">
            Eliminar producto </button>

            <x-confirmation-modal wire:model="modal">
                <x-slot:title>
                    <h1 class="text-2xl font-bold text-oxford ">Eliminar producto</h1>
                </x-slot:title>
                <x-slot:content>
                    <p class="text-xl">Esto borrará el producto y no es recuperable.</p>
                    <p class="text-xl">¿Está seguro de hacerlo?</p>
                </x-slot:content>
                <x-slot:footer>
                    <x-button wire:click="confirmarEliminacion()">Eliminar el producto</x-button>
                </x-slot:footer>
            </x-confirmation-modal>
        </div>

        HTML;
    }

    public $modal=false;
    public $productos;

    public function mount($id){
        $this->productos=Products::find($id);
    }

    public function confirmarEliminacion(){
        $this->productos->delete();
        $this->modal=false;
        $this->redirect('/');
    }
}
