<?php

namespace App\Livewire;

use App\Models\Challenge;
use App\Models\Member;
use App\Models\promotion;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPromotions extends Component
{
    use WithFileUploads;

    // propiedades públicas del componente
    public $modal = false;
    public $titulo= '';
    public $descripcion = '';
    public $fecha_inicio = '';
    public $fecha_final = '';
    public $imagen;


    public $promotionss; // Almacena todos los retos existentes

    public function save()
    {
        //Creamos la validación para que no permita campos vacíos
        $validatedData = $this->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
            'imagen' => 'nullable|image|max:20480', // 20MB máximo
        ]);

        if ($this->imagen) {
            $imagePath = $this->imagen->store('images', 'public');
        }

        // Creamos un nuevo registro de Subject con los datos validados
        $promotion = new Promotion();
        $promotion->titulo = $validatedData['titulo'];
        $promotion->descripcion = $validatedData['descripcion'];
        $promotion->fecha_inicio = $validatedData['fecha_inicio'];
        $promotion->fecha_final = $validatedData['fecha_final'];
        $promotion->imagen = $imagePath ?? null; // Guarda la URL de la imagen si existe
        $promotion->save();


        // Creamos un registro de Listax asociado.
        $member = Member::create([
            'promotion_id' => $promotion->id,
        ]);

        // Reseteamos los campos del formulario y ocultamos el modal
        $this->reset(['titulo', 'descripcion', 'fecha_inicio', 'fecha_final', 'imagen']);
        $this->modal = false;
        // Mostramos un mensaje de éxito en la sesión
        session()->flash('status', 'Reto creado exitosamente.');
    }
    public function render()
    {

        // Cargamos todas las retos existentes y las pasamos a la variable $clases
        $this->promotionss = Member::with('promotion')->get();

        // Retornamos el código HTML que se mostrará en la vista
        return <<<'HTML'
<div>
    <button wire:click="$toggle('modal')" class="inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:bg-payneGray active:bg-payneGray focus:outline-none focus:ring-2 focus:ring-oxford focus:ring-offset-2 transition ease-in-out duration-150 bg-zinc-700 hover:bg-syracuse">
        Agregar promoción
    </button>

    <x-confirmation-modal wire:model="modal">
        <x-slot:title>
        <img src="{{ asset('Icons/LogoB.png') }}" alt="login" class="object-cover w-1/4 h-1/4" />
            <h1 class="text-2xl font-bold text-white">Agregar una promoción</h1>
        </x-slot:title>
        <x-slot:content>
            <form wire:submit.prevent="save" class="text-white">
            <div class="px-4 sm:px-20">
                <label class="block text-left">Titulo:</label><br>
                <input class=" w-full rounded-lg mb-4 bg-white text-black" type="text" wire:model="titulo"><br>

                <label class="block text-left">Descripción:</label><br>
                <!-- Cambiar input por textarea -->
                <input class="w-full rounded-lg mb-4 bg-white text-black" wire:model="descripcion"><br>
            </div>
            <div class="flex flex-col sm:flex-wrap md:flex-row items-center justify-center">
            <div class="mb-4 px-8">
                <label class="block  px-20">Inicia:</label><br>
                <input class="w-2-5 rounded-lg mb-4 bg-gray-300 text-black" type="date" wire:model="fecha_inicio"><br>
            </div>
            <div class="mb-4 ">
                <label class="block  px-20">Finaliza :</label><br>
                <input class="w-2-5 rounded-lg mb-4 bg-gray-300 text-black" type="date" wire:model="fecha_final"><br>
            </div>
            </div>
                <label class="block text-left px-20">Subir Imagen:</label><br>
                <input class="px-20 rounded-lg mb-4 bg-[#2A2928] text-white" type="file" wire:model="imagen"><br>

        </x-slot:content>
        <x-slot:footer>
            <div class="flex items-center justify-center">
                <x-button wire:click="confirmarPromocion()" class="px-4 py-2">Agregar promoción</x-button>
            </div>
        </x-slot:footer>
    </x-confirmation-modal>
</div>

HTML;

    }
    public function confirmarPromocion()
    {
        $this->redirect('/agregarPromociones');
    }
}

//
//        return view('livewire.add-promotions');
