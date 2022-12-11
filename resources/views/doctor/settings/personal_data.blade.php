<x-settings-layout>
  <div class="container grid">
      <label class="py-3 border-b">
          <span>Profil Dokter</span>
      </label>
      <!-- Invalid input -->
      <form class="flex flex-wrap items-end md:grid-cols-2 py-3 mb-8 space-y-4"
          action="{{ route('doctor.setting.personal_data.update', $user) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <label class="block text-sm w-full md:w-2/3 md:pr-2">
              <span class="text-dark mb-1 font-bold">
                  Tanggal Lahir
              </span>
              <input
                  class="block w-full mt-1 text-sm rounded-md @error('birth_date') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Masukkan nama" type="date" name="birth_date" value="{{ $user->doctor->birth_date }}" />
              <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
          </label>
          <label class="block text-sm w-full md:w-2/3 md:pr-2">
              <span class="text-dark mb-1 font-bold">
                  Jenis Kelamin
              </span>
            <select name="sex" id="" class="block w-full mt-1 text-sm rounded-md @error('sex') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input">
                <option value="" @if($user->doctor->sex === NULL) @selected(true) @endif>Pilih</option>
                <option value="1" @if($user->doctor->sex === 1) @selected(true) @endif>Laki-laki</option>
                <option value="0" @if($user->doctor->sex === 0) @selected(true) @endif>Perempuan</option>
            </select>
              <x-input-error :messages="$errors->get('sex')" class="mt-2" />
          </label>
          <div class="block w-full pt-8">
              <x-main-button>Simpan Perubahan</x-main-button>
          </div>
      </form>
  </div>
</x-settings-layout>
