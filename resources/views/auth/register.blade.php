<x-guest-layout title="Login">
    <x-auth-card>
        <x-slot name="logo">
            <div class="flex items-center space-y-2 flex-col">
                <a href="/">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    <p class="text-primary">Teeth.id</p>
                </a>
                <h1 class="text-primary text-section-header font-semibold">Register</h1>
                <p>Sign up to create your account</p>
            </div>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-text-field-component placeholder="Name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-text-field-component placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-field-component placeholder="Password" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-text-field-component placeholder="Confirm Password" id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Daftar sebagai -->
            <div class="mt-4">
                <select name='role' class='w-full bg-primary-light border-0 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'>
                    <option key="user" value="user">User</option>
                    <option key="doctor" value="doctor">Dokter</option>
                </select>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
            <x-main-button class="mt-4 w-full">
                {{ __('Register') }}
            </x-main-button>
        </form>
    </x-auth-card>
</x-guest-layout>
