@props(['title', 'description'])

<div class="flex flex-col px-3 h-[235px] lg:h-[312px] justify-center items-center bg-primary-light">
    {{ $slot }}
    <h3 class="text-mb-content-heading lg:text-content-heading text-dark font-bold">{{ $title }}</h3>
    <p class="hidden lg:block text-gray px-4 text-center">{{ $description }}</p>
</div>