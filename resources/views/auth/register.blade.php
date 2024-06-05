<div class="flex flex-col md:flex-row">

    <div class="w-full md:w-2/5 bg-gray-300 order-last md:order-first">
        <x-guest-layout>
        <x-authentication-card>
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>

            <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="flex justify-center mb-4">
                <div class="w-24 h-24 bg-[#2A2928] rounded-full flex items-center justify-center">
                    <img src="{{ asset('Icons/Regis.png') }}" alt="User Icon" class="w-1/2 h-auto">
                </div>
            </div>

            <div class="mb-4">
                <x-label for="name" value="{{ __('Nombre') }}" />
                <div class="flex items-center">
                    <div class="p-3 bg-[#2A2928] mt-1 ">
                        <img src="{{ asset('Icons/User.png') }}" alt="User Icon" class="w-6 h-auto">
                    </div>
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Correo') }}" />
                <div class="flex items-center">
                    <div class="p-3 bg-[#2A2928] mt-1 ">
                        <img src="{{ asset('Icons/Correo.png') }}" alt="User Icon" class="w-6 h-auto">
                    </div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <div class="flex items-center">
                    <div class="p-3 bg-[#2A2928] mt-1 ">
                        <img src="{{ asset('Icons/pass.png') }}" alt="User Icon" class="w-6 h-auto">
                    </div>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirme su contraseña') }}" />
                <div class="flex items-center">
                    <div class="p-3 bg-[#2A2928] mt-1 ">
                        <img src="{{ asset('Icons/pass.png') }}" alt="User Icon" class="w-6 h-auto">
                    </div>
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            <div class="mt-4">
                <input type="checkbox" id="show-passwords" onclick="togglePasswordVisibility()">
                <label class="text-white" for="show-passwords">{{ __('Mostrar contraseñas') }}</label>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-center mt-4">
                <x-button class="ms-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
            <div class="flex items-center justify-center mt-4">
                <a class="underline text-sm text-blue-800 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('¿Ya tienes una cuenta?') }}
                </a>
            </div>
        </form>
        </x-authentication-card>

    <!-- JavaScript para mostrar/ocultar contraseñas -->
    <script>
        function togglePasswordVisibility() {
            const passwordFields = ['password', 'password_confirmation'];
            passwordFields.forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (field.type === 'password') {
                    field.type = 'text';
                } else {
                    field.type = 'password';
                }
            });
        }
    </script>
        </x-guest-layout>
    </div>

        <div class="w-full md:w-3/5 bg-gray-200 order-first md:order-last ">
            <img src="{{ asset('IMG/FondoBlack2.png') }}" alt="register" class="object-cover w-full h-full" />
        </div>

</div>
