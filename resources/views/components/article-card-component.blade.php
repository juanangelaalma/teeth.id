@props(['title', 'image', 'date', 'body', 'slug'])

<div class="w-full mx-3 my-4 flex items-center py-2 px-4 lg:p-0 space-x-4 cursor-pointer lg:flex-col lg:w-[30%] transition-hover duration-300 hover:rounded-xl hover:shadow-card-article">
    <div class="w-[90px] h-[90px] min-w-[90px] min-h-[90px] lg:w-full lg:h-auto lg:min-w-[120px] lg:min-h-[120px] rounded-lg lg:rounded-2xl overflow-hidden">
        <img class="w-full object-cover object-center h-full" src="{{ $image }}"
        alt="">
    </div>
    <div class="flex flex-col py-2 lg:space-y-2 lg:w-full lg:pr-4 lg:px-2">
        <span class="hidden lg:block text-primary text-[14px]">{{ timestamp_to_date($date) }}</span>
        <h4 class="text-dark mb-3 lg:mb-auto leading-6 lg:leading-auto text-xl lg:text-xl font-bold line-clamp-2"> {{ $title }}</h4>
        <p class="text-light-gray leading-4 lg:leading-auto text-sm lg:text-md lg:leading-6 font-light line-clamp-2">{{ $body }}</p>
        <a class="hidden lg:block text-secondary text-btn-more">Learn more -></a>
    </div>
</div>