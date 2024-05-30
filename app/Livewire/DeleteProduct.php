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
            <button wire:click="$toggle('modal')" class="bg-orange-500 text-white px-2 py-1 rounded ">
            Eliminar producto </button>

            <x-confirmation-modal wire:model="modal">
                <x-slot:title>
                    <h1 class="text-2xl font-bold text-black ">Eliminar producto</h1>
                </x-slot:title>
                <x-slot:content>
                    <p class="text-xl">Esto borrará el producto y no es recuperable.</p>
                    <p class="text-xl">¿Está seguro de hacerlo?</p>
                </x-slot:content>
                <x-slot:footer>
                    <x-button wire:click="confirmar()">Eliminar el producto</x-button>
                </x-slot:footer>
            </x-confirmation-modal>
        </div>

        HTML;
    }

    public $modal=false;
    public $product;

    public function mount($id){
        $this->product=Products::find($id);
    }

    public function confirmar(){
        $this->product->delete();
        $this->modal=false;
        $this->redirect('/accionesProductos');
    }
}
