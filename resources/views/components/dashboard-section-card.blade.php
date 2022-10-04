<div class="mb-6">
    <div class="max-w-7xl mx-auto">
        @if ($title)
        <div class="w-full flex items-center space-x-2 mb-2 flex-row">
            <p class="truncate text-mb-content-paragraph-small text-dark font-medium">{{ $title }}</p>
            <hr class="w-auto flex-1 text-[#DADBDD]">
        </div>
        @endif
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div {{ $attributes->merge(['class' => 'p-6 bg-white border-b border-gray-200']) }}>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>