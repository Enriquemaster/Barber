<x-app-layout>
    <div class="py-12 bg-black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Incluimos el componente Livewire "add-component" --}}
            <livewire:AddChallenge/>
            <div class="px-10">
                <livewire:show-challenge />
            </div>

        </div>
    </div>
</x-app-layout>


