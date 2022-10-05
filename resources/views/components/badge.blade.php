@php
    $TYPES = [
        'success' => 'border-primary text-primary',
        'pending' => 'border-secondary text-secondary',
        'fail' => 'border-red-400 text-red-400',
    ];
@endphp

<span class="px-3 py-1 rounded-2xl border-2 text-sm {{ $TYPES[$type] }}">
    {{ $slot }}
</span>