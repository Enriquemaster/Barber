<?php
namespace App\Livewire;
use App\Models\Challenge;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateChallenge extends Component
{
    use WithFileUploads;

    public $modal = false;
    public $challenge_id;
    public $titulo = '';
    public $descripcion = '';
    public $recompensa = '';
    public $fecha_inicio = '';
    public $fecha_final = '';
    public function mount($id)
    {
        $this->challenge_id = $id;
        $reto = Challenge::findOrFail($id);
        $this->titulo = $reto->titulo;
        $this->descripcion = $reto->descripcion;
        $this->recompensa = $reto->recompensa;
        $this->fecha_inicio = $reto->fecha_inicio;
        $this->fecha_final = $reto->fecha_final;
    }

    public function update()
    {
        $this->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'recompensa' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_final' => 'required|date',
        ]);

        $challenge = Challenge::findOrFail($this->challenge_id);
        $challenge->update([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'recompensa' => $this->recompensa,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_final' => $this->fecha_final,
        ]);

        $this->modal = false;
        $this->reset(['titulo', 'descripcion', 'recompensa', 'fecha_inicio', 'fecha_final', 'challenge_id']);
        session()->flash('status', 'Reto actualizado exitosamente.');
        return redirect('/agregarRetos');
    }

    public function render()
    {
        return <<<'HTML'
<div>
  <button wire:click="$toggle('modal')" class="inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:bg-payneGray active:bg-payneGray focus:outline-none focus:ring-2 focus:ring-oxford focus:ring-offset-2 transition ease-in-out duration-150 bg-zinc-700 hover:bg-syracuse">
    Actualizar Reto
  </button>

  <x-confirmation-modal wire:model="modal">
    <x-slot:title>
      <h1 class="text-2xl font-bold text-oxford">Actualizar el reto</h1>
    </x-slot:title>
    <x-slot:content>
      <form wire:submit.prevent="update">
        <label>Título: </label><br>
        <input class="px-20 rounded-lg mb-4" type="text" wire:model="titulo"><br>
        <label>Descripción: </label><br>
        <input class="px-20 rounded-lg mb-4" type="text" wire:model="descripcion"><br>
        <label>Recompensa: </label><br>
        <input class="px-20 rounded-lg mb-4" type="text" wire:model="recompensa"><br>
        <label>Fecha de inicio: </label><br>
        <input class="px-20 rounded-lg mb-4" type="date" wire:model="fecha_inicio"><br>
        <label>Fecha de finalización: </label><br>
        <input class="px-20 rounded-lg mb-4" type="date" wire:model="fecha_final"><br>
      </form>
    </x-slot:content>
    <x-slot:footer>
      <div class="flex items-center justify-center">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-700 hover:bg-blue-700 text-white font-bold rounded">Guardar</button>
      </div>
    </x-slot:footer>
  </x-confirmation-modal>
</div>
HTML;
    }
}

