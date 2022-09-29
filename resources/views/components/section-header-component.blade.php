@props(['title', 'body' => '', 'hightlight' => ''])

@php
    $resultTitle = $title;
    if($hightlight) {
        $resultTitle = str_replace($hightlight, "<span class='text-primary'>$hightlight</span>", $title);
    }
@endphp

<div class="flex w-full items-start flex-col space-y-2 mb-6">
    <h1 class="text-mb-section-header lg:text-section-header text-dark font-bold">{!! $resultTitle !!}</h1>
    <p class="text-section-paragraph text-dark-gray">{{ $body }}</p>
</div>