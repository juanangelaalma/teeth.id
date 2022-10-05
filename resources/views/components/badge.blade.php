@php
    $TYPES = [
        'accepted' => 'border-primary text-primary',
        'pending' => 'border-secondary text-secondary',
        'rejected' => 'border-red-500 text-red-500',
    ];
@endphp

<span class="px-3 py-1 rounded-2xl border-2 text-sm {{ $TYPES[$type] }}">
    {{ $slot }}
</span>