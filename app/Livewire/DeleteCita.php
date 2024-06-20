<?php

namespace App\Livewire;

use App\Models\Citas;
use Livewire\Component;

class DeleteCita extends Component
{

    public $modal = false;
    public $reserva;
    public function mount($id)
    {
        $this->reserva = Citas::find($id);
        if (!$this->reserva) {
            session()->flash('message', 'La cita no se encontró.');
        }
    }

    public function render()
    {
        return <<<'HTML'
            <div class="flex items-center justify-center">
                <div class="w-1/2">
                    <button wire:click="$toggle('modal')" class="px-2 py-1 border border-transparent rounded-lg font-semibold text-xs text-black uppercase tracking-widest focus:bg-payneGray active:bg-payneGray focus:outline-none focus:ring-2 focus:ring-oxford focus:ring-offset-2 transition ease-in-out duration-150 bg-payneGray bg-[#242222]">
                        <img src="{{ asset('Icons/Delete.png') }}" alt="Eliminar reto" class="w-1/4 mx-auto md:w-1/4" />
                        <h1 class="text-white">Eliminar registro de cita</h1>
                    </button>
                </div>

                <x-confirmation-modal wire:model="modal">
                    <x-slot:title>
                        <h1 class="text-2xl font-bold text-oxford text-white">Eliminación de la cita</h1>
                    </x-slot:title>
                    <x-slot:content>
                        <p class="text-white text-xl">Esto borrará la cita y no es recuperable.</p>
                        <p class="text-white text-xl">¿Está seguro de hacerlo?</p>
                    </x-slot:content>
                    <x-slot:footer>
                        <x-button wire:click="eliminar()" class="px-4 py-5">Eliminar la cita</x-button>
                    </x-slot:footer>
                </x-confirmation-modal>
            </div>
        HTML;
    }

    // Método para confirmar la eliminación de la cita
    public function eliminar()
    {
        if ($this->reserva) {
            // Eliminar las relaciones en la tabla intermedia
            $this->reserva->users()->detach();

            // Intenta eliminar la cita y muestra cualquier error
            try {
                $this->reserva->delete();
                session()->flash('success', 'La cita se eliminó correctamente.');
            } catch (\Exception $e) {
                session()->flash('error', 'Error al eliminar la cita: ' . $e->getMessage());
            }
        }
        $this->modal = false;
        $this->redirect('/agendar');
    }
}
