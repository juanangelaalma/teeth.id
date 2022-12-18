<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="flex flex-col lg:flex-row">
        <div class="flex flex-col w-full lg:w-1/4">
            <ul class="space-y-6">
                <li>
                    <a class="flex items-center space-x-4" href="{{ route('doctor.setting.profile') }}">
                        <img src="{{ asset('assets/icons/profile.svg') }}" alt="">
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-4" href="{{ route('doctor.setting.personal_data') }}">
                        <img src="{{ asset('assets/icons/personal_data.svg') }}" alt="">
                        <p>Data Diri</p>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-4" href="{{ route('doctor.setting.clinic') }}">
                        <img src="{{ asset('assets/icons/clinic.svg') }}" alt="">
                        <p>Klinik Saya</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-full mt-6 lg:mt-0 lg:w-3/4">
            <x-dashboard-section-card>
                <x-success-alert />
                <div class="container grid">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </x-dashboard-section-card>
        </div>
    </div>
</x-app-layout>
