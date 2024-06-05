<div class="flex flex-col md:flex-row">
    <div class="w-full md:w-3/5 bg-gray-200 ">
        <img src="{{ asset('IMG/FondoBlack3.png') }}" alt="login" class="object-cover w-full h-full" />
    </div>

    <div class="w-full md:w-2/5 bg-gray-300 ">
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
                    <div class="flex justify-center mb-4">
                        <div class="w-24 h-24 bg-[#2A2928] rounded-full flex items-center justify-center">
                            <img src="{{ asset('IMG/Logo-Barber.png') }}" alt="User Icon" class="w-3/4 h-auto">
                        </div>
                    </div>
                    <div class="mb-4">
                        <x-label for="email" value="{{ __('CORREO') }}" />
                        <div class="flex items-center">
                            <div class="p-2 bg-amber-500 mt-1 ">
                                <img src="{{ asset('Icons/loginIconic.png') }}" alt="User Icon" class="w-6 h-auto">
                            </div>
                            <x-input id="email" class="block mt-1 w-3/4" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-label for="password" value="{{ __('CONTRASEÑA') }}" />
                        <div class="flex items-center relative">
                            <div class="p-2 bg-amber-500 mt-1">
                                <img src="{{ asset('Icons/passIconic.png') }}" alt="Lock Icon" class="w-6 h-6">
                            </div>
                            <x-input id="password" class="block mt-1 w-3/4" type="password" name="password" required autocomplete="current-password" />
                            <div class="p-2 cursor-pointer" onclick="togglePassword()">
                                <img id="eyeIcon" src="{{ asset('Icons/ojo.png') }}" alt="Eye Icon" class="w-6 h-6">
                            </div>
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
                            <span class="ml-2 text-sm text-white">{{ __('¿Olvido su Contraseña?') }}</span>
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
    </div>
</div>


<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.src = '{{ asset('Icons/ojo2.png') }}';
        } else {
            passwordInput.type = 'password';
            eyeIcon.src = '{{ asset('Icons/ojo.png') }}';
        }
    }
</script>
