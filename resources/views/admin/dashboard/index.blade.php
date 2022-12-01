<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="flex flex-row flex-wrap">
      <div class="w-full lg:w-1/3">
          <x-dashboard-section-card title="Status akun anda">
            <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0">
              <img class="h-auto lg:h-[130px]" src="{{ asset('assets/images/casual-life-3d-doctor-sitting-on-the-floor-with-books.png') }}" alt="">
              <div>
                <p class="text-dark-gray text-md">Lihat beberapa permintaan verifikasi yang belum anda approve</p>
                <a href="" class="text-bold text-primary underline mt-3">Lihat</a>
              </div>
            </div>
          </x-dashboard-section-card>
      </div>
      <div class="w-full pl-0 lg:pl-3 lg:w-2/3">
          <x-dashboard-section-card class="p-0">
              <div class="flex flex-col lg:flex-row">
                  <div class="p-6">
                      <h1 class="text-primary text-section-paragraph">Selamat datang admin 🎉</h1>
                      <p class="text-content-paragraph text-dark-gray mb-6"><span class="text-dark font-semibold">Tetap semangat!!.</span> Masa depan adalah milik Anda yang telah menyiapkannya dari
                          hari ini</p>
                      <x-main-button-link>Lihat Janji</x-main-button-link>
                  </div>
                      <img class="w-full lg:w-[200px]" src="{{ asset('assets/images/doctor-about.png') }}" alt="">
                  </div>
              </div>
          </x-dashboard-section-card>
      </div>
  </div>
</x-app-layout>
