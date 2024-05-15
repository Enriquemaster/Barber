<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <x-label for="email" value="{{ __('CORREO') }}" />
                <div class="flex items-center">
                    <div class="mr-2">
                        <img src="{{ asset('IMG/loginIconic.png') }}" alt="User Icon" class="w-6 h-6">
                    </div>
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
            </div>

            <div class="mb-4">
                <x-label for="password" value="{{ __('CONTRASEÑA') }}" />
                <div class="flex items-center">
                    <div class="mr-2">
                        <img src="{{ asset('IMG/passIconic.png') }}" alt="Lock Icon" class="w-6 h-6">
                    </div>
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
            </div>

                <div class="flex items-center justify-center py-2">
                    <x-button class=" px-4 py-2">
                        {{ __('INGRESAR') }}
                    </x-button>
                </div>

                <div>
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('¿Olvido su Contraseña?') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-center">
            

            <div class="mt-4 text-center">
                <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700">{{ __('Registrarse ahora') }}</a>
            </div>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>