<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permintaan verifikasi') }}
        </h2>
    </x-slot>

    <x-dashboard-section-card title="Permintaan verifikasi">
        <x-success-alert />
        <div class="px-6 overflow-x-scroll lg:overflow-x-hidden">
            <table class="lg:w-full">
                <thead class="bg-primary-light">
                    <tr>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Nama Dokter</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Curiculum Vitae</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Surat Izin Praktek</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Surat Tanda Registrasi</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Action</th>
                    </tr>
                </thead>
                @if (!$requestVerifications)
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center py-3 text-sm">
                                Tidak ada data
                            </td>
                        </tr>
                    </tbody>
                @else
                    <tbody>
                        @foreach ($requestVerifications as $request)
                            <tr>
                                <td class="pr-6 pl-6 py-3 text-xs truncate">
                                    {{ $request->doctor->user->name }}</td>
                                <td class="pr-6 pl-6 py-3 text-xs text-primary underline">
                                    <a href="/storage/documents/{{ $request->cv }}"
                                        target="__blank">{{ $request->cv }}</a>
                                </td>
                                <td class="pr-6 pl-6 py-3 text-xs text-primary underline">
                                    <a href="/storage/documents/{{ $request->sip }}"
                                        target="__blank">{{ $request->sip }}</a>
                                </td>
                                <td class="pr-6 pl-6 py-3 text-xs text-primary underline">
                                    <a href="/storage/documents/{{ $request->str }}"
                                        target="__blank">{{ $request->str }}</a>
                                </td>
                                <td class="pr-6 pl-6 py-3 space-y-2">
                                  <form method="POST" action="{{ route('admin.documents.approve', $request) }}">
                                    @csrf
                                    <button type="submit" class="bg-primary px-3 py-1.5 text-white hover:bg-blue-700 transition-colors duration-150 rounded-sm">Accept</button>
                                  </form>
                                  <form method="POST" action="{{ route('admin.documents.reject', $request) }}">
                                    @csrf
                                    <button type="submit" class="bg-red-500 px-3 py-1.5 text-white hover:bg-red-700 transition-colors duration-150 rounded-sm">Reject</button>
                                  </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </x-dashboard-section-card>
</x-app-layout>
