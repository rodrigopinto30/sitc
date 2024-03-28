<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <div class="grid gap-6">
                <!-- Email -->
                <div class="space-y-2">
                    <x-form.label
                        for="email"
                        :value="__('Email')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            {{-- <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" /> --}}
                            <x-fontisto-email aria-hidden="true" class="w-5 h-5"/>
                        </x-slot>

                        <x-form.input
                            withicon
                            id="email"
                            class="block w-full"
                            type="email"
                            name="email"
                            :value="old('email')"
                            placeholder="{{ __('Email') }}"
                            required
                            autofocus
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Contraseña -->
                <div class="space-y-2">
                    <x-form.label
                        for="password"
                        :value="__('Contraseña')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            {{-- <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" /> --}}
                            <x-carbon-password aria-hidden="true" class="w-5 h-5"/>
                        </x-slot>

                        <x-form.input
                            withicon
                            id="password"
                            class="block w-full"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="{{ __('Contraseña') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input
                            id="remember_me"
                            type="checkbox"
                            class="text-blue-50 border-gray-300 rounded focus:border-blue-300 focus:ring focus:ring-blue-50 dark:border-gray-600 dark:bg-dark-eval-1 dark:focus:ring-offset-dark-eval-1"
                            name="remember"
                        >

                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Recordar') }}
                        </span>
                    </label>

                    {{-- @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Olvide mi contraseña') }}
                        </a>
                    @endif --}}
                </div>

                <div>
                    <x-button class="justify-center w-full gap-2">
                        {{-- <x-heroicon-o-login class="w-6 h-6" aria-hidden="true" /> --}}

                        <span>{{ __('Ingresar') }}</span>
                    </x-button>
                </div>

                {{-- @if (Route::has('register'))
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __('No tengo una cuenta') }}
                        <a href="{{ route('register') }}" class="text-blue-500 hover:underline">
                            {{ __('Registrarme') }}
                        </a>
                    </p>
                @endif --}}
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
