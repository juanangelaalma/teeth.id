<x-settings-layout>
    <div class="container grid">
        <label class="py-3 border-b">
            <span>Klinik saya</span>
        </label>
        <!-- Invalid input -->
        <form class="flex flex-wrap items-end md:grid-cols-2 py-3 mb-8 space-y-4"
            action="{{ route('doctor.setting.clinic_update', $clinic ? $clinic : 'null') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label class="block text-sm w-full md:w-2/3 md:pr-2">
                <span class="text-dark mb-1 font-bold">
                    Nama Klinik
                </span>
                <input
                    class="block w-full mt-1 text-sm rounded-md @error('name') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                    placeholder="Masukkan nama klinik" type="text" name="name"
                    value="{{ $clinic ? $clinic->name : '' }}" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </label>
            <label class="block text-sm w-full md:w-2/3 md:pr-2">
                <span class="text-dark mb-1 font-bold">
                    Alamat Klinik
                </span>
                <input
                    class="block w-full mt-1 text-sm rounded-md @error('address') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                    placeholder="Masukkan alamat klinik" type="text" name="address"
                    value="{{ $clinic ? $clinic->address : '' }}" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </label>
            <label class="block text-sm w-full md:w-2/3 md:pr-2">
                <span class="text-dark mb-1 font-bold">
                    Biaya per kunjungan
                </span>
                <input
                    class="block w-full mt-1 text-sm rounded-md @error('price') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                    placeholder="Masukkan alamat klinik" type="number" name="price"
                    value="{{ $clinic ? $clinic->price : '' }}" />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </label>
            <label class="block text-sm w-full md:w-2/3 md:pr-2">
                <span class="text-dark mb-1 font-bold">
                    Kota klinik
                </span>
                <select name="city" class="block w-full mt-1 text-sm rounded-md @error('city') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input" id="">
                    @if (!$clinic)
                        <option value="" selected disabled>Pilih kota</option>
                    @endif
                    @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ $clinic ? ($city->id === $clinic->city_id ? 'selected="true"' : '') : '' }}>{{ $city->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </label>
            <label class="block text-sm w-full md:w-2/3 md:pr-2">
                <span class="text-dark mb-1 font-bold">
                    Status
                </span>
                <!-- Toggle B -->
                <div class="flex items-center justify-start w-full mb-12">

                    <label for="is_open" class="flex items-center cursor-pointer switcher">
                        <!-- toggle -->
                        <div class="relative">
                          {{-- Harus menggunakan hidden input(diakali) --}}
                          <input type="hidden" name="is_open" value="false">
                            <!-- input -->
                            <input {{ $clinic ? ($clinic->is_open ? 'checked' : '') : '' }} type="checkbox" name="is_open" id="is_open" value="true" class="sr-only" />
                            <!-- line -->
                            <div class="dot-wrapper block border border-dark-gray w-14 h-8 rounded-full"></div>
                            <!-- dot -->
                            <div class="dot absolute left-1 top-1 bg-dark-gray w-6 h-6 rounded-full transition"></div>
                        </div>
                        <!-- label -->
                        <div id="is_open_label" class="ml-3 text-gray-700 font-medium{{ $clinic ? ($clinic->is_open ? ' text-primary' : ' text-dark-gray') : ' text-dark-gray' }}">
                            {{ $clinic ? ($clinic->is_open ? 'Buka' : 'Tutup') : 'Tutup' }}
                        </div>
                    </label>
                </div>
            </label>
            <div class="block w-full pt-8">
                <x-main-button>Simpan Perubahan</x-main-button>
            </div>
        </form>
    </div>
    <script>
      const openSwitcher = document.getElementById('is_open');
      const openSwitcherLabel = document.getElementById('is_open_label');

      openSwitcher.addEventListener('change', () => {
        if (openSwitcher.checked) {
          openSwitcherLabel.classList.remove('text-dark-gray');
          openSwitcherLabel.innerHTML = 'Buka';
          openSwitcherLabel.classList.add('text-primary');
        } else {
          openSwitcherLabel.classList.remove('text-primary');
          openSwitcherLabel.innerHTML = 'Tutup';
          openSwitcherLabel.classList.add('text-dark-gray');
        }
      });
    </script>
</x-settings-layout>
