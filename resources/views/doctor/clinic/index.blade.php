<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jadwal Klinik') }}
        </h2>
    </x-slot>
    <x-dashboard-section-card title="Atur jadwal klinik anda">
        <x-success-alert />
        @if ($hasClinic)
        <form action="{{ route('doctor.clinic.create_clinic_schedule') }}" method="POST">
            @csrf
            <div class="flex flex-row space-x-3">
                <label class="block flex-1 text-sm w-full md:w-1/2 md:pr-2">
                    <span class="text-dark mb-1">
                        Hari
                    </span>
                    {{-- 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday' --}}
                    <select name="day" id=""
                        class="block w-full mt-1 text-sm rounded-md @error('day') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input">
                        <option value="monday">Senin</option>
                        <option value="tuesday">Selasa</option>
                        <option value="wednesday">Rabu</option>
                        <option value="thrusday">Kamis</option>
                        <option value="friday">Jumat</option>
                        <option value="saturday">Sabtu</option>
                        <option value="sunday">Minggu</option>
                    </select>
                    <x-input-error :messages="$errors->get('day')" class="mt-2" />
                </label>

                <label class="block flex-1 text-sm w-full md:w-1/2 md:pr-2">
                    <span class="text-dark mb-1">
                        Jam
                    </span>
                    <select name="hour" id=""
                        class="block w-full mt-1 text-sm rounded-md @error('day') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input">
                        @for ($i = 0; $i < 25; $i++)
                            @if ($i < 10)
                                <option value="0{{ $i }}:00">0{{ $i }}:00</option>
                            @else
                                <option value="{{ $i }}:00">{{ $i }}:00</option>
                            @endif
                        @endfor
                    </select>
                    <x-input-error :messages="$errors->get('day')" class="mt-2" />
                </label>
                <div class="flex items-end">
                    <x-main-button type="submit">Simpan</x-main-button>
                </div>
            </div>
        </form>

        <div class="flex flex-col mt-8">
            <div class="space-y-5">
                @if ($clinic)
                @foreach ($clinic->schedules as $schedule)
                <div>
                    <h6>{{ day_english_to_indo($schedule->day) }}</h6>
                    <div class="flex flex-row space-x-3 flex-wrap">
                        @foreach ($schedule->hours as $hour)
                            <div class="bg-primary-light text-dark-gray px-2 py-1 text-sm">{{ $hour->hour }}</div>
                        @endforeach
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        @else
        <div class="w-full flex items-center justify-center">
            <p>Mohon lengkapi data klinik anda <a href="{{ route('doctor.setting.clinic') }}" class="underline text-primary">disini</a></p>
        </div>
        @endif
    </x-dashboard-section-card>
</x-app-layout>
