<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel') }}
        </h2>
    </x-slot>

    <x-dashboard-section-card title="Artikel anda">
        <x-success-alert />
        <div class="px-6 overflow-x-scroll lg:overflow-x-hidden">
            <div class="w-full h-20 flex items-center">
                <x-main-button-link href="{{ route('doctor.articles.create') }}" class="my-6 flex items-center space-x-2"> 
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 7H9V1C9 0.734784 8.89464 0.48043 8.70711 0.292893C8.51957 0.105357 8.26522 0 8 0C7.73478 0 7.48043 0.105357 7.29289 0.292893C7.10536 0.48043 7 0.734784 7 1V7H1C0.734784 7 0.48043 7.10536 0.292893 7.29289C0.105357 7.48043 0 7.73478 0 8C0 8.26522 0.105357 8.51957 0.292893 8.70711C0.48043 8.89464 0.734784 9 1 9H7V15C7 15.2652 7.10536 15.5196 7.29289 15.7071C7.48043 15.8946 7.73478 16 8 16C8.26522 16 8.51957 15.8946 8.70711 15.7071C8.89464 15.5196 9 15.2652 9 15V9H15C15.2652 9 15.5196 8.89464 15.7071 8.70711C15.8946 8.51957 16 8.26522 16 8C16 7.73478 15.8946 7.48043 15.7071 7.29289C15.5196 7.10536 15.2652 7 15 7Z" fill="white"/>
                    </svg>
                    <p class="font-normal">Tulis Artikel</p>
                 </x-main-button-link>
            </div>
            <table class="lg:w-full mb-4">
                <thead class="bg-primary-light">
                    <tr>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">No</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Gambar</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Judul Artikel</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Tanggal Post</th>
                        <th class="text-left truncate pr-6 pl-6 py-3 leading-0">Action</th>
                    </tr>
                </thead>
                @if (!$articles)
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center py-3 text-sm">
                                Tidak ada data
                            </td>
                        </tr>
                    </tbody>
                @else
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <td class="pr-6 pl-6 py-3 text-xs">{{ $articles->count() * ($articles->currentPage() - 1) + $loop->iteration }}</td>
                            <td class="pr-6 pl-6 py-3 text-xs">
                                <div class="w-[4rem] h-[4rem] overflow-hidden rounded-full">
                                    <img loading="lazy" src="{{ $article->image }}" height="4rem" width="4rem" class="w-full h-full object-cover object-center" alt="">
                                </div>
                            </td>
                            <td class="pr-6 pl-6 py-3 text-xs">{{ $article->title }}</td>
                            <td class="pr-6 pl-6 py-3 text-xs truncate">{{ timestamp_to_date($article->created_at) }}</td>
                            <td class="pr-6 pl-6 py-3 space-y-2 lg:space-y-0">
                                <a href="{{ route('doctor.articles.edit', $article) }}" class="bg-secondary flex justify-center py-1 px-3 text-white rounded-md lg:inline-block text-sm cursor-pointer">
                                    Edit
                                </a>
                                <a href="{{ route('doctor.articles.destroy', $article) }}" class="bg-red-500 flex justify-center py-1 px-3 text-white rounded-md lg:inline-block text-sm cursor-pointer">
                                    Hapus  
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
        {{ $articles->links() }}
    </x-dashboard-section-card>
</x-app-layout>
