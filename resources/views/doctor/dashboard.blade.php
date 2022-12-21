<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-row flex-wrap">
        <div class="w-full lg:w-1/3">
            <x-dashboard-section-card title="Status akun anda">
                <div class="w-full flex flex-row items-center space-x-4">
                    <div class="w-[50px] h-[50px] rounded-full overflow-hidden">
                        {{-- <img class="w-full h-full object-cover object-center"
                            src="{{ Auth::user()->client && Auth::user()->client->photo ? Auth::user()->client->photo : '/assets/images/default.jpg' }}"
                            alt="Profile Picture"> --}}
                        <img class="w-full h-full object-cover object-center"
                            src="https://xsgames.co/randomusers/assets/avatars/male/46.jpg" alt="Profile Picture">
                    </div>
                    <div class="flex-1 space-y-1 flex-col justify-center items-center">
                        <h6 class="text-[15px]">dr. Juan Angela Alma S.kom</h6>
                        <div class="flex items-center space-x-2">
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.25 9.625H5.875V10.25C5.875 10.4158 5.94085 10.5747 6.05806 10.6919C6.17527 10.8092 6.33424 10.875 6.5 10.875C6.66576 10.875 6.82473 10.8092 6.94194 10.6919C7.05915 10.5747 7.125 10.4158 7.125 10.25V9.625H7.75C7.91576 9.625 8.07473 9.55915 8.19194 9.44194C8.30915 9.32473 8.375 9.16576 8.375 9C8.375 8.83424 8.30915 8.67527 8.19194 8.55806C8.07473 8.44085 7.91576 8.375 7.75 8.375H7.125V7.75C7.125 7.58424 7.05915 7.42527 6.94194 7.30806C6.82473 7.19085 6.66576 7.125 6.5 7.125C6.33424 7.125 6.17527 7.19085 6.05806 7.30806C5.94085 7.42527 5.875 7.58424 5.875 7.75V8.375H5.25C5.08424 8.375 4.92527 8.44085 4.80806 8.55806C4.69085 8.67527 4.625 8.83424 4.625 9C4.625 9.16576 4.69085 9.32473 4.80806 9.44194C4.92527 9.55915 5.08424 9.625 5.25 9.625V9.625ZM10.875 2.75H9.625V2.125C9.625 1.62772 9.42746 1.15081 9.07583 0.799175C8.72419 0.447544 8.24728 0.25 7.75 0.25H5.25C4.75272 0.25 4.27581 0.447544 3.92417 0.799175C3.57254 1.15081 3.375 1.62772 3.375 2.125V2.75H2.125C1.62772 2.75 1.15081 2.94754 0.799175 3.29917C0.447544 3.65081 0.25 4.12772 0.25 4.625V10.875C0.25 11.3723 0.447544 11.8492 0.799175 12.2008C1.15081 12.5525 1.62772 12.75 2.125 12.75H10.875C11.3723 12.75 11.8492 12.5525 12.2008 12.2008C12.5525 11.8492 12.75 11.3723 12.75 10.875V4.625C12.75 4.12772 12.5525 3.65081 12.2008 3.29917C11.8492 2.94754 11.3723 2.75 10.875 2.75ZM4.625 2.125C4.625 1.95924 4.69085 1.80027 4.80806 1.68306C4.92527 1.56585 5.08424 1.5 5.25 1.5H7.75C7.91576 1.5 8.07473 1.56585 8.19194 1.68306C8.30915 1.80027 8.375 1.95924 8.375 2.125V2.75H4.625V2.125ZM11.5 10.875C11.5 11.0408 11.4342 11.1997 11.3169 11.3169C11.1997 11.4342 11.0408 11.5 10.875 11.5H2.125C1.95924 11.5 1.80027 11.4342 1.68306 11.3169C1.56585 11.1997 1.5 11.0408 1.5 10.875V6.5H11.5V10.875ZM11.5 5.25H1.5V4.625C1.5 4.45924 1.56585 4.30027 1.68306 4.18306C1.80027 4.06585 1.95924 4 2.125 4H10.875C11.0408 4 11.1997 4.06585 11.3169 4.18306C11.4342 4.30027 11.5 4.45924 11.5 4.625V5.25Z"
                                    fill="#515559" />
                            </svg>
                            <span class="text-[15px] leading-[0px]">Rumah sakit sudiro husodo</span>
                        </div>
                    </div>
                </div>
                <div class="w-full mt-4 space-y-1">
                    <p class="text-content-paragraph">Progress profile</p>
                    <div class="w-full bg-[#DADBDD] rounded-full h-2 mb-4">
                        <div class="bg-secondary h-2 rounded-full" style="width: {{ $progress }}%"></div>
                    </div>
                    <div class="w-full flex justify-end">
                        <span class="text-light-gray text-[13px]">{{ $progress }}% terpenuhi</span>
                    </div>
                </div>
                <div class="text-[15px] text-light-gray mt-4 space-y-2">
                    <p>Dengan melengkapi profil, Anda dapat menikmati layanan <span
                            class="text-primary font-semibold">Teeth.id</span> dengan maksimal.</p>
                    <p>Lengkapi profile sekarang melalui <a href="" class="text-primary font-semibold">link</a>
                    </p>
                </div>
            </x-dashboard-section-card>
        </div>
        <div class="w-full pl-0 lg:pl-3 lg:w-2/3">
            @if (!Auth::user()->isVerified())
            <div class="bg-secondary-opacity w-full rounde-xl rounded-lg p-4 mb-4">
                <p class="text-dark-gray">Akun Anda belum diverifikasi. Lakukan upload dokumen agar kami dapat
                    verifikasi akun anda pada <a href="{{ route('doctor.documents.index') }}" class="text-primary">Verifikasi Sekarang</a></p>
            </div>
            @endif
            <x-dashboard-section-card class="p-0">
                <div class="flex flex-col lg:flex-row">
                    <div class="p-6">
                        <h1 class="text-primary text-section-paragraph">Selamat datang dokter 🎉</h1>
                        <p class="text-content-paragraph text-dark-gray mb-6"><span class="text-dark font-semibold">Tetap semangat!!.</span> Masa depan adalah milik Anda yang telah menyiapkannya dari
                            hari ini</p>
                        <x-main-button-link href="{{ route('doctor.order.index') }}">Lihat Janji</x-main-button-link>
                    </div>
                        <img class="w-full lg:w-[200px]" src="{{ asset('assets/images/doctor-about.png') }}" alt="">
                    </div>
                </div>
            </x-dashboard-section-card>
        </div>
    </div>
</x-app-layout>
