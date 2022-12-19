<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Janjian') }}
        </h2>
    </x-slot>

    <x-dashboard-section-card title="Hari ini">
        <x-success-alert />
        <div class="px-6 overflow-x-scroll lg:overflow-x-hidden">
            <table class="lg:w-full mb-4">
                <thead class="bg-primary-light">
                    <tr>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">ID Pesanan</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Jam</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Nama Pasien</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Tipe Pembayaran</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Tanggal</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Action</th>
                    </tr>
                </thead>
                {{-- <tbody>
                  <tr>
                      <td colspan="6" class="text-center py-3 text-sm">
                          Tidak ada data
                      </td>
                  </tr>
              </tbody> --}}
                <tbody>
                    <tr>
                        <td class="pr-6 pl-6 py-3 text-sm">#8573028402948</td>
                        <td class="pr-6 pl-6 py-3 text-sm truncate">18:00 WIB</td>
                        <td class="pr-6 pl-6 py-3 text-sm">Juan Angela Alma</td>
                        <td class="pr-6 pl-6 py-3 text-sm truncate">Tunai</td>
                        <td class="pr-6 pl-6 py-3 text-sm truncate">12 Oktober 2022</td>
                        <td class="pr-6 pl-6 py-3">
                            <button
                                class="bg-primary py-2 px-4 text-white rounded-xl text-sm font-normal cursor-pointer">Selesai</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-dashboard-section-card>
    <x-dashboard-section-card title="Hari ini">
        <x-success-alert />
        <div class="px-6 overflow-x-scroll lg:overflow-x-hidden">
            <table class="lg:w-full mb-4">
                <thead class="bg-primary-light">
                    <tr>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">ID Pesanan</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Jam</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Nama Pasien</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Tipe Pembayaran</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Tanggal</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Action</th>
                    </tr>
                </thead>
                {{-- <tbody>
                  <tr>
                      <td colspan="6" class="text-center py-3 text-sm">
                          Tidak ada data
                      </td>
                  </tr>
              </tbody> --}}
                <tbody>
                    <tr>
                        <td class="pr-6 pl-6 py-3 text-sm">#8573028402948</td>
                        <td class="pr-6 pl-6 py-3 text-sm truncate">18:00 WIB</td>
                        <td class="pr-6 pl-6 py-3 text-sm">Juan Angela Alma</td>
                        <td class="pr-6 pl-6 py-3 text-sm truncate">Tunai</td>
                        <td class="pr-6 pl-6 py-3 text-sm truncate">12 Oktober 2022</td>
                        <td class="pr-6 pl-6 py-3">
                            <button
                                class="bg-primary py-2 px-4 text-white rounded-xl text-sm font-normal cursor-pointer">Selesai</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-dashboard-section-card>

</x-app-layout>
