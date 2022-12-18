<x-settings-layout>
    <div class="container grid">
        <label class="py-3 border-b">
            <span>Profil Dokter</span>
        </label>
        <!-- Invalid input -->
        <form class="flex flex-wrap items-end md:grid-cols-2 py-3 mb-8 space-y-4"
            action="{{ route('doctor.setting.profile.update', $user) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="" class="text-sm w-full md:w-2/3 md:pr-2 flex items-center space-x-3">
                <div class="w-[88px] h-[88px] rounded-full overflow-hidden">
                    <img id="profile_pic" class="w-full h-full object-cover object-center"
                        src="{{ $user->doctor->photo ? $user->doctor->photo : '/assets/images/default.jpg' }}"
                        alt="">
                </div>
                <div class="space-y-3 flex-1">
                    <div>
                      <input type="file" class="opacity-0 w-[0.1px] h-[0.1px]" name="profile_pic_input"
                        id="profile_pic_input" id="profile_pic_input">
                    <label for="profile_pic_input" style="font-size: 12px"
                        class="bg-primary py-2 px-4 font-light text-white rounded-xl cursor-pointer">Choose
                        file</label>
                    </div>
                    <p class="text-mb-content-paragraph-small text-light-gray">Gambar Profile Anda sebaiknya memiliki rasio 1:1 <br class="hidden md:block"> dan berukuran tidak lebih dari 2MB.</p>
                </div>
            </label>
            <label class="block text-sm w-full md:w-2/3 md:pr-2">
                <span class="text-dark mb-1 font-bold">
                    Nama Lengkap
                </span>
                <input
                    class="block w-full mt-1 text-sm rounded-md @error('name') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                    placeholder="Masukkan nama" name="name" value="{{ $user->name }}" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </label>
            <label class="block text-sm w-full md:w-2/3 md:pr-2">
                <span class="text-dark mb-1 font-bold">
                    Email
                </span>
                <input
                    class="block w-full mt-1 text-sm bg-gray-100 rounded-md @error('email') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                    placeholder="Masukkan email" name="email" value="{{ $user->email }}" disabled />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </label>
            <label class="block text-sm w-full md:w-2/3 md:pr-2">
                <span class="text-dark mb-1 font-bold">
                    Deskripsi Diri
                </span>
                <textarea
                    class="block w-full mt-1 text-sm h-20 rounded-md @error('description') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                    placeholder="Masukkan deskripsi diri" name="description" value="{{ $user->doctor->description }}">{{ $user->doctor->description }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </label>
            <div class="block w-full pt-8">
                <x-main-button>Simpan Perubahan</x-main-button>
            </div>
        </form>
    </div>

    <script>
      const profilePicFileInput = document.getElementById('profile_pic_input');
      profilePicFileInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        const reader = new FileReader();
        reader.onload = (e) => {
          const img = document.getElementById('profile_pic');
          console.log("image", img)
          img.src = e.target.result;
        }
        reader.readAsDataURL(file);
      });
    </script>
</x-settings-layout>
