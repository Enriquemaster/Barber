<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;
use App\Models\challenge;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class AddChallenge extends Component
{
    // propiedades públicas del componente
    public $modal = false;
    public $titulo= ''; // Almacena el nombre de la asignatura
    public $descripcion = ''; // Almacena la descripción de la asignatura
    public $recompensa = ''; // Almacena el nombre de la carrera
    public $fecha_inicio = ''; // Almacena el nombre de la carrera
    public $fecha_final = ''; // Almacena el nombre de la carrera
//    public $imagen;
    public $retoss; // Almacena todos los retos existentes

    public function save()
    {
        //Creamos la validación para que no permita campos vacíos
        $validatedData = $this->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'recompensa' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
//            'imagen' => 'required|image|max:10240',
        ]);

//        $imageContent = file_get_contents($this->imagen->getRealPath());
//        $imagePath = $this->imagen->store('images', 'public');

        // Creamos un nuevo registro de Subject con los datos validados
        $challenge = new Challenge();
        $challenge->titulo = $validatedData['titulo'];
        $challenge->descripcion = $validatedData['descripcion'];
        $challenge->recompensa = $validatedData['recompensa'];
        $challenge->fecha_inicio = $validatedData['fecha_inicio'];
        $challenge->fecha_final = $validatedData['fecha_final'];
//        $challenge->image_url = $imagePath;
//        'imagen' => $imageContent,
        $challenge->save();


        // Creamos un registro de Listax asociado.
        $member = Member::create([
            'challenge_id' => $challenge->id,
        ]);

        // Reseteamos los campos del formulario y ocultamos el modal
        $this->reset(['titulo', 'descripcion', 'recompensa', 'fecha_inicio', 'fecha_final']);
        $this->modal = false;
        // Mostramos un mensaje de éxito en la sesión
        session()->flash('status', 'Reto creado exitosamente.');
    }
    public function render()
    {
//        return view('livewire.add-challenge');
        // Cargamos todas las retos existentes y las pasamos a la variable $clases
        $this->retoss = Member::with('challenge')->get();

        // Retornamos el código HTML que se mostrará en la vista
        return <<<'HTML'
<div>
  <button wire:click="$toggle('modal')" class="inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:bg-payneGray active:bg-payneGray focus:outline-none focus:ring-2 focus:ring-oxford focus:ring-offset-2 transition ease-in-out duration-150 bg-[#8B5F3D] hover:bg-syracuse">
    Agregar reto
</button>

    <x-confirmation-modal wire:model="modal">
        <x-slot:title>
            <h1 class="text-2xl font-bold text-oxford">Agregar un reto</h1>
        </x-slot:title>
        <x-slot:content>
            <form wire:submit.prevent="save" >
            <label>Titulo: </label><br>
                <input class="px-20 rounded-lg mb-4" type="text" wire:model="titulo" ><br>
                <label>Descripción: </label><br>
                <input class="px-20 rounded-lg mb-4 " type="text" wire:model="descripcion" ><br>
                <label>Recompensa: </label><br>
                <input class="px-20 rounded-lg mb-4 " type="text" wire:model="recompensa" ><br>
                <label>Fecha de inicio: </label><br>
                <input class="px-20 rounded-lg mb-4 " type="date" wire:model="fecha_inicio" ><br>
                <label>Fecha de finalización: </label><br>
                <input class="px-20 rounded-lg mb-4 " type="date" wire:model="fecha_final" ><br>
<!--                <label>Subir Imagen: </label><br>-->
<!--                <input class="px-20 rounded-lg mb-4" type="file" wire:model="imagen                          "><br>-->
        </x-slot:content>
        <x-slot:footer>
        <div class="flex items-center justify-center">
         <x-button wire:click="confirmarReto()" class="px-4 py-5">Agregar reto</x-button>
        </div>
        </x-slot:footer>
    </x-confirmation-modal>
</div>
HTML;

    }
    // Método que redirige al usuario a la ruta "/dashboard" cuando se confirma la creación de la clase
    public function confirmarReto(){
        $this->redirect('/agregarRetos');

    }
}
