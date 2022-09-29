@props(['no_title' => false])

<x-section-component {{ $attributes->merge(['class' => 'section-padding w-full bg-white py-12']) }}>
    @if (!$no_title)
        <x-section-header-component title="Artikel Kesehatan Terkini untuk Anda" hightlight="Terkini">
        </x-section-header-component>
    @endif
    <div class="w-full flex flex-col lg:flex-row space-y-6 lg:space-y-0">
        <div class="w-full lg:w-1/2">
            <div class="flex flex-col lg:px-4 py-2 space-y-4">
                <div class="w-full rounded-2xl max-h-[20rem] max-w-[35.5rem] overflow-hidden">
                    <img class="w-full object-cover object-center" src="https://picsum.photos/id/237/300/200"
                        alt="">
                </div>
                <div class="flex items-start flex-col space-y-3 max-w-[35.5rem]">
                    <span class="text-primary text-content-date">12 Oktober 2022</span>
                    <h4 class="text-dark text-content-heading font-bold">Menambah kecantikan anda dengan melakukan behel
                        gigi setiap sehari sekali</h4>
                    <p class="text-light-gray text-content-paragraph font-light">simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s</p>
                    <a class="text-secondary text-btn-more">Learn more -></a>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col py-2 lg:px-4">
            @if (!$no_title)
                <div class="flex flex-row justify-between mb-4 items-center">
                    <h6 class="text-dark text-content-heading font-bold">Apa yang baru?</h6>
                    <a class="text-secondary text-btn-more">Learn more -></a>
                </div>
            @endif
            <div
                class="w-full flex items-center py-2 lg:py-4 px-4 space-x-4 cursor-pointer transition-hover duration-300 hover:rounded-xl hover:shadow-card-article">
                <div
                    class="w-[90px] h-[90px] min-w-[90px] min-h-[90px] lg:w-[120px] lg:h-[120px] lg:min-w-[120px] lg:min-h-[120px] rounded-lg overflow-hidden">
                    <img class="w-full object-cover object-center h-full" src="https://picsum.photos/id/237/300/200"
                        alt="">
                </div>
                <div class="flex flex-col py-2 space-y-3 lg:space-y-2">
                    <h4 class="text-dark leading-6 lg:leading-auto text-xl lg:text-xl font-bold line-clamp-2">Menambah
                        kecantikan anda dengan melakukan behel gigi setiap sehari sekali</h4>
                    <p
                        class="text-light-gray leading-4 lg:leading-auto text-sm lg:text-md lg:leading-6 font-light line-clamp-2">
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s</p>
                </div>
            </div>
        </div>
    </div>
</x-section-component>
