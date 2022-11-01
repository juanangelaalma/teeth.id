<x-app-layout>
  {{-- Additional Scripts for text editor --}}
  <x-slot name="scripts">
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script src="/js/tinymce/config.js"></script>
    <script>
        const inputFiles = document.querySelectorAll('input[type="file"]')
        inputFiles.forEach(input => {
            input.addEventListener('change', (e) => {
                const fileName = e.target.files[0].name
                const inputDisable = input.parentElement.nextElementSibling.querySelector('input')
                inputDisable.value = fileName
            })
        })
    </script>
  </x-slot>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Artikel Baru') }}
      </h2>
  </x-slot>

  <x-dashboard-section-card title="Buat artikel baru">
    <div class="container grid">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <!-- Invalid input -->
                <form
                    class="flex flex-wrap items-end md:grid-cols-2 px-4 py-3 mb-8 bg-white rounded-lg shadow-md space-y-2"
                    action="{{ route('doctor.articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="block text-sm w-full md:w-1/2 md:pr-2">
                        <span class="text-dark mb-1">
                            Judul artikel
                        </span>
                        <input
                            class="block w-full mt-1 text-sm rounded-md @error('title') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                            placeholder="Masukkan judul artikel" name="title" value="{{ old('title') }}" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </label>

                    <label class="flex flex-col text-sm w-full md:w-1/2 md:pl-2">
                        <div class="pl-0 lg:pr-8 mt-3 lg:mt-0 space-x-4 flex flex-row">
                            <div>
                                <input type="file" class="opacity-0 w-[0.1px] h-[0.1px]"
                                    value="{{ old('image') }}"
                                    name="image" id="image" id="image">
                                <label for="image" style="font-size: 14px"
                                    class="bg-primary py-3 px-7 text-xs font-light text-white rounded-xl text-btn cursor-pointer">Choose
                                    file</label>
                            </div>
                            <div class="flex-1">
                                <input type="text" disabled
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    required />
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </label>

                    <label class="flex flex-col text-sm w-full pb-3">
                        <span class="text-dark mb-1">
                            Body
                        </span>
                        <textarea class="form-control" name="body" id="body">{{ old('body') }}</textarea>
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    </label>
                    <x-main-button class="w-full">POST</x-main-button>
                </form>
            </div>
        </div>
    </div>
  </x-dashboard-section-card>
</x-app-layout>
