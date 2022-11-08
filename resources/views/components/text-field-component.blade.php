<div class="w-full relative">
  @if ($slot->toHtml())
        <input {{ $attributes->merge(['class' => 'w-full bg-primary-light border-0 border-gray-300 rounded-md py-2 pl-10 pr-6 text-gray-600 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none shadow-sm']) }} />
        <div class="absolute top-0 left-0 h-full flex items-center px-4">
          {{ $slot }}
        </div>
    @else
        <input {{ $attributes->merge(['class' => 'w-full bg-primary-light border-0 border-gray-300 rounded-md py-2 px-4 text-gray-600 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none shadow-sm']) }} />
    @endif
</div>