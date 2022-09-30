@props(['no_title' => false])

<x-section-component {{ $attributes->merge(['class' => 'section-padding w-full bg-white py-12']) }}>
    @if (!$no_title)
        <x-section-header-component title="Artikel Kesehatan Terkini untuk Anda" hightlight="Terkini" />
    @endif
    @if (!$articlesRecommendation->isEmpty())
        <div class="w-full flex flex-col lg:flex-row space-y-6 lg:space-y-0">
            <a href="{{ route('user.articles.show', $articlesRecommendation[0]->slug) }}" class="w-full lg:w-1/2">
                <div class="flex flex-col lg:px-4 py-2 space-y-4">
                    <div class="w-full rounded-2xl max-h-[20rem] max-w-[35.5rem] overflow-hidden">
                        <img class="w-full object-cover object-center" src="https://picsum.photos/id/237/300/200"
                            alt="">
                    </div>
                    <div class="flex items-start flex-col space-y-3 max-w-[35.5rem]">
                        <span class="text-primary text-content-date">{{ timestamp_to_date($articlesRecommendation[0]->created_at) }}</span>
                        <h4 class="text-dark text-content-heading font-bold">{{ $articlesRecommendation[0]->title }}</h4>
                        <p class="text-light-gray text-content-paragraph font-light">{{ strip_tags(substr($articlesRecommendation[0]->body, 0, 200), null) }}</p>
                        <span class="text-secondary text-btn-more">Learn more -></span>
                    </div>
                </div>
            </a>
            <div class="w-full lg:w-1/2 flex flex-col py-2 lg:px-4">
                @if (!$no_title)
                    <div class="flex flex-row justify-between mb-4 items-center">
                        <h6 class="text-dark text-content-heading font-bold">Apa yang baru?</h6>
                        <a class="text-secondary text-btn-more">Learn more -></a>
                    </div>
                @endif
                @if ($articlesRecommendation->count() > 1)
                    @for ($i = 1; $i < $articlesRecommendation->count(); $i++)
                        <a href="{{ route('user.articles.show', $articlesRecommendation[$i]->slug) }}"
                            class="w-full flex items-center py-2 lg:py-4 px-4 space-x-4 cursor-pointer transition-hover duration-300 hover:rounded-xl hover:shadow-card-article">
                            <div
                                class="w-[90px] h-[90px] min-w-[90px] min-h-[90px] lg:w-[120px] lg:h-[120px] lg:min-w-[120px] lg:min-h-[120px] rounded-lg overflow-hidden">
                                <img class="w-full object-cover object-center h-full"
                                    src="{{ $articlesRecommendation[$i]->image }}" alt="">
                            </div>
                            <div class="flex flex-col py-2 space-y-3 lg:space-y-2">
                                <h4
                                    class="text-dark leading-6 lg:leading-auto text-xl lg:text-xl font-bold line-clamp-2">
                                    {{ $articlesRecommendation[$i]->title }}</h4>
                                <p class="text-light-gray leading-4 lg:leading-auto text-sm lg:text-md lg:leading-6 font-light line-clamp-2">
                                    {{ $articlesRecommendation[$i]->body }}
                                </p>
                            </div>
                        </a>
                    @endfor
                @endif
            </div>
        </div>
    @endif
</x-section-component>
