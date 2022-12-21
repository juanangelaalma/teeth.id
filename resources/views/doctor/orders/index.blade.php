<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Janjian') }}
        </h2>
    </x-slot>

    @foreach ($orders as $key => $order)
    <x-dashboard-section-card title="{{ $key === $today ? 'Hari ini' : ($key === $tomorrow ? 'Besok' : ($key === $after_tomorrow ? 'Lusa' : date_to_date_indo($key)) )}}">
        <x-success-alert />
        <div class="px-6 overflow-x-scroll lg:overflow-x-hidden">
            <table class="lg:w-full mb-4">
                <thead class="bg-primary-light">
                    <tr>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">ID Pesanan</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Jam</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Nama Pasien</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Tipe Pembayaran</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Tanggal Dibuat</th>
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
                    @foreach ($order as $item)
                    <tr>
                        <td class="pr-6 pl-6 py-3 text-sm">#{{ $item->invoice_id }}</td>
                        <td class="pr-6 pl-6 py-3 text-sm truncate">{{ $item->hour }} WIB</td>
                        <td class="pr-6 pl-6 py-3 text-sm">{{ $item->customer->name }}</td>
                        <td class="pr-6 pl-6 py-3 text-sm truncate">Tunai</td>
                        <td class="pr-6 pl-6 py-3 text-sm truncate">{{ timestamp_to_date($item->created_at) }}</td>
                        <td class="pr-6 pl-6 py-3">
                            <form action="{{ route('doctor.order.asdone', $item) }}" method="POST">
                                @csrf
                                <button type="submit"
                                class="bg-primary py-2 px-4 text-white rounded-xl text-sm font-normal cursor-pointer">Selesai</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-dashboard-section-card>
    @endforeach

</x-app-layout>
