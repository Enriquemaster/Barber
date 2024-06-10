<div>
    <button wire:click="$toggle('modal')" class="inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:bg-payneGray active:bg-payneGray focus:outline-none focus:ring-2 focus:ring-oxford focus:ring-offset-2 transition ease-in-out duration-150 bg-zinc-700 hover:bg-syracuse">
        Agregar cita
    </button>

    <x-confirmation-modal wire:model="modal">
        <x-slot:title>
            <img src="{{ asset('Icons/LogoB.png') }}" alt="login" class="object-cover w-1/4 h-1/4" />
            <h1 class="text-2xl font-bold text-white">Bienvenido  {{ Auth::user()->name }}</h1>
        </x-slot:title>

        <x-slot:content>
            <form wire:submit.prevent="save" class="text-white">
                <div class="px-4 sm:px-20">
                    <label class="block text-left">Servicio:</label><br>
                    <select wire:model="servicio" class="w-full rounded-lg mb-4 bg-white text-black">
                        <option value="" disabled selected>Selecciona un servicio</option>
                        <option value="Afeitado de cabeza">Afeitado de cabeza</option>
                        <option value="Corte de cabello">Corte de cabello</option>
                        <option value="Grecas">Grecas</option>
                        <option value="Afeitado de barba">Afeitado de barba</option>
                        <option value="Arreglo de barba">Arreglo de barba</option>
                        <option value="Teñido de barba o cabello">Teñido de barba o cabello</option>
                        <option value="Limpieza de ceja">Limpieza de ceja</option>
                    </select><br>
                    <label class="block text-left ">Barbero:</label><br>
                    <div class="max-w-md mx-auto p-4">
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input type="radio" id="gardo" name="barber" wire:model="barbero" value="David" class="mr-2">
                                <img src="{{ asset('Icons/Barber.png') }}" alt="Barbero " class="w-20 h-20 rounded-full mr-2">
                                <label for="David" class="flex flex-col">
                                    <span class="font-medium">David Alberto Tec Chi</span>
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="daniel" name="barber" wire:model="barbero" value="Cristian" class="mr-2">
                                <img src="{{ asset('Icons/Barber.png') }}" alt="Barbero2 " class="w-20 h-20 rounded-full mr-2">
                                <label for="daniel" class="flex flex-col">
                                    <span class="font-medium">Cristian Chan</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="block ">Fecha:</label><br>
                    <input class="w-2-5 rounded-lg mb-4 bg-gray-300 text-black"  type="datetime-local" wire:model="fecha"><br>
                </div>
                <div class="p-4">
                    <p class="text-zinc-700 dark:text-zinc-300">
                        *** El cliente cuenta con 10 minutos de tolerancia o su cita será cancelada ***
                    </p>
                    <div class="flex items-center mt-2">
                        <input id="agree" type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" wire:model="agree">
                        <label for="agree" class="ml-2 text-zinc-700 dark:text-zinc-300">Acepto</label>
                    </div>
                </div>
                <div class="flex justify-center mt-5">
                    <button type="submit" class='inline-flex items-center px-4 py-2 bg-green-700 hover:bg-blue-700 text-white font-bold rounded' wire:disabled="!$agree">Guardar</button>
                </div>
            </form>
        </x-slot:content>
        <x-slot:footer>

        </x-slot:footer>
    </x-confirmation-modal>
</div>
