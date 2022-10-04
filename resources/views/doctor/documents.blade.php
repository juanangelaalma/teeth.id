<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <x-dashboard-section-card title="Kirim dokumen">
    
  </x-dashboard-section-card>
  <x-dashboard-section-card title="Riwayat verifikasi">
    <div class="px-6 overflow-x-scroll lg:overflow-x-hidden">
      <table class="lg:w-full">
        <thead class="bg-primary-light">
          <tr>
            <th class="text-left truncate pr-12 pl-6 py-3 leading-0">No</th>
            <th class="text-left truncate pr-12 pl-6 py-3 leading-0">Tanggal</th>
            <th class="text-left truncate pr-12 pl-6 py-3 leading-0">Curiculum Vitae</th>
            <th class="text-left truncate pr-12 pl-6 py-3 leading-0">Surat Izin Praktek</th>
            <th class="text-left truncate pr-12 pl-6 py-3 leading-0">Surat Tanda Registrasi</th>
            <th class="text-left truncate pr-12 pl-6 py-3 leading-0">Status</th>
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
            <td class="pr-12 pl-6 py-3 text-content-paragraph">1</td>
            <td class="pr-12 pl-6 py-3 text-content-paragraph">12/12/2020</td>
            <td class="pr-12 pl-6 py-3 text-content-paragraph text-primary underline">
              <a href="" target="__blank">juanalma.pdf</a>
            </td>
            <td class="pr-12 pl-6 py-3 text-content-paragraph text-primary underline">
              <a href="" target="__blank">juanalma.pdf</a>
            </td>
            <td class="pr-12 pl-6 py-3 text-content-paragraph text-primary underline">
              <a href="" target="__blank">juanalma.pdf</a>
            </td>
            <td class="pr-12 pl-6 py-3">
              <x-badge type="fail">Rejected</x-badge>
            </td>
          </tr>
          <tr>
            <td class="pr-12 pl-6 py-3 text-content-paragraph">1</td>
            <td class="pr-12 pl-6 py-3 text-content-paragraph">12/12/2020</td>
            <td class="pr-12 pl-6 py-3 text-content-paragraph text-primary underline">
              <a href="" target="__blank">juanalma.pdf</a>
            </td>
            <td class="pr-12 pl-6 py-3 text-content-paragraph text-primary underline">
              <a href="" target="__blank">juanalma.pdf</a>
            </td>
            <td class="pr-12 pl-6 py-3 text-content-paragraph text-primary underline">
              <a href="" target="__blank">juanalma.pdf</a>
            </td>
            <td class="pr-12 pl-6 py-3">
              <x-badge type="fail">Rejected</x-badge>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </x-dashboard-section-card>
</x-app-layout>
