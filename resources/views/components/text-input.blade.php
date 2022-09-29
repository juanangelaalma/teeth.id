@props(['disabled' => false])

<div className="flex flex-col items-start relative">
    @if ($slot)
      <div class="absolute top-0 left-0 h-full flex items-center px-4 text-dark-gray">{{ $slot }}</div>
    @endif
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' =>
            'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm' . ($slot ? 'pl-12' : ''),
    ]) !!}>

</div>
