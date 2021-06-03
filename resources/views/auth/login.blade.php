<x-guest-layout class="login">
    <x-auth-card>
        <x-slot name="logo"> 
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="login__form_grid" method="POST" action="{{ route('login') }}">
            @csrf

            <h2 class="form__titel">Log in</h2>
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input  id="email"  type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Wachtwoord')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="checkbox">{{ __('Onthoud mij') }}
                    <input id="remember_me" type="checkbox" name="remember">
                    <span class="checkmark"></span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                

                <a  class="button button_left" href="/register">
                        {{ __('Maak een account') }}
                    </a>
                <x-button class="ml-3 button button_send button_right">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
