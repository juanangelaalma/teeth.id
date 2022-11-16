<x-forum-layout>
    <h1 class="text-semibold text-dark-gray text-content-heading">Diskusi Kesehatan Terbaru</h1>
    <div class="flex flex-col">
        @foreach ($questions as $question)
        <x-question :question="$question"></x-question>
        @endforeach
    </div>
</x-forum-layout>
