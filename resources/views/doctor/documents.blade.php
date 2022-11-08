<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Verifikasi Dokter') }}
        </h2>
    </x-slot>

    <x-dashboard-section-card title="Kirim dokumen">
        <form action="{{ route('doctor.documents.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="px-6 flex flex-row flex-wrap">
                <div class="w-full flex flex-col space-y-4 lg:w-1/2 mb-6">
                    <p>Upload CV</p>
                    <div class="pl-0 lg:pr-8 space-x-4 flex flex-row">
                        <div>
                            <input type="file" accept="application/pdf" class="opacity-0 w-[0.1px] h-[0.1px]"
                                id="cv" name="cv">
                            <label for="cv" style="font-size: 14px"
                                class="bg-primary py-3 px-7 text-xs font-light text-white rounded-xl text-btn cursor-pointer">Choose
                                file</label>
                        </div>
                        <div class="flex-1">
                            <input type="text" disabled
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                required />
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('cv')" class="mt-2" />
                </div>
                <div class="w-full flex flex-col space-y-4 lg:w-1/2 mb-6">
                    <p>Upload Surat Izin Praktek</p>
                    <div class="pl-0 lg:pr-8 space-x-4 flex flex-row">
                        <div>
                            <input type="file" accept="application/pdf" class="opacity-0 w-[0.1px] h-[0.1px]"
                                id="sip" name="sip">
                            <label for="sip" style="font-size: 14px"
                                class="bg-primary py-3 px-7 text-xs font-light text-white rounded-xl text-btn cursor-pointer">Choose
                                file</label>
                        </div>
                        <div class="flex-1">
                            <input type="text" disabled
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                required />
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('sip')" class="mt-2" />
                </div>
                <div class="w-full flex flex-col space-y-4 lg:w-1/2 mb-6">
                    <p>Upload Surat Tanda Registrasi</p>
                    <div class="pl-0 lg:pr-8 space-x-4 flex flex-row">
                        <div>
                            <input type="file" accept="application/pdf" class="opacity-0 w-[0.1px] h-[0.1px]"
                                name="str" id="str" id="str">
                            <label for="str" style="font-size: 14px"
                                class="bg-primary py-3 px-7 text-xs font-light text-white rounded-xl text-btn cursor-pointer">Choose
                                file</label>
                        </div>
                        <div class="flex-1">
                            <input type="text" disabled
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                required />
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('str')" class="mt-2" />
                </div>
                <div class="w-full flex flex-col space-y-4 lg:w-1/2 mb-6 justify-end">
                    <x-secondary-button type="submit" class="lg:max-w-[200px]">Submit</x-secondary-button>
                </div>
            </div>
        </form>
    </x-dashboard-section-card>
    <x-dashboard-section-card title="Riwayat verifikasi">
        <div class="px-6 overflow-x-scroll lg:overflow-x-hidden">
            <table class="lg:w-full">
                <thead class="bg-primary-light">
                    <tr>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">No</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Tanggal</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Curiculum Vitae</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Surat Izin Praktek</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Surat Tanda Registrasi</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Status</th>
                    </tr>
                </thead>
                @if (!$certificates)
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center py-3 text-sm">
                                Tidak ada data
                            </td>
                        </tr>
                    </tbody>
                @else
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach ($certificates as $certificate)
                        <tr>
                            <td class="pr-6 pl-6 py-3 text-xs">{{ $no }}</td>
                            <td class="pr-6 pl-6 py-3 text-xs truncate">{{ timestamp_to_date($certificate->created_at) }}</td>
                            <td class="pr-6 pl-6 py-3 text-xs text-primary underline">
                                <a href="/storage/documents/{{ $certificate->cv }}" target="__blank">{{ $certificate->cv }}</a>
                            </td>
                            <td class="pr-6 pl-6 py-3 text-xs text-primary underline">
                                <a href="/storage/documents/{{ $certificate->sip }}" target="__blank">{{ $certificate->sip }}</a>
                            </td>
                            <td class="pr-6 pl-6 py-3 text-xs text-primary underline">
                                <a href="/storage/documents/{{ $certificate->str }}" target="__blank">{{ $certificate->str }}</a>
                            </td>
                            <td class="pr-6 pl-6 py-3">
                                <x-badge type="{{ $certificate->status }}">{{ $certificate->status }}</x-badge>
                            </td>
                        </tr>
                        @php $no++ @endphp
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </x-dashboard-section-card>

    <x-slot name="scripts">
        <script>
            const inputFiles = document.querySelectorAll('input[type="file"]')
            inputFiles.forEach(input => {
                input.addEventListener('change', (e) => {
                    console.log(input)
                    const fileName = e.target.files[0].name
                    const inputDisable = input.parentElement.nextElementSibling.querySelector('input')
                    inputDisable.value = fileName
                })
            })
        </script>
    </x-slot>
</x-app-layout>
