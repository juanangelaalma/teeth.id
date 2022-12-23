<x-forum-layout>
    <x-slot name="scripts">
        <script src="/js/tinymce/tinymce.min.js"></script>
        <script src="/js/tinymce/config.js"></script>
    </x-slot>
    <h6 class="text-secondary text-mb-content-paragraph">{{ $question->topic ? $question->topic : 'Other' }}</h6>
    <h1 class="text-dark-gray text-content-heading">{{ $question->title }}</h1>
    <p class="text-light-gray text-mb-content-paragraph-small">{{ timestamp_to_date($question->created_at) }}</p>

    {{-- QUESTION --}}
    <div class="bg-primary-light rounded-lg px-3 py-2 flex justify-start items-center space-x-3 mt-4">
        <div style="height: 40px; width: 40px;" class="rounded-full bg-[#A4D0C7] flex justify-center items-center">
            <p class="text-white capitalize">{{ $question->user->name[0] }}</p>
        </div>
        <p class="text-dark-gray text-mb-content-paragraph">{{ $question->user->name }}</p>
    </div>
    <p class="text-content-paragraph text-dark-gray mt-3">
        {{ $question->body }}
    </p>

    {{-- ANSWER --}}
    @if ($question->answer && $question->doctor_id)
        <div class="border border-[#ECECEC] rounded-lg mt-4 p-4">
            <p class="text-light-gray text-sm">Dijawab oleh:</p>
            <div class="flex flex-row space-x-4 mt-4">
                <div class="w-[50px] h-[50px] rounded-full overflow-hidden">
                    <img class="w-full h-full object-cover object-center"
                        src="{{ $question->doctor_id && $question->doctor->photo ? $question->doctor->photo : '/assets/images/default.jpg' }}"
                        alt="">
                </div>
                <div class="flex flex-col">
                    <h6 class="text-paragraph text-dark-gray">dr. {{ $question->doctor->user->name }}</h6>
                    <p class="text-mb-content-pragraph text-light-gray">
                        {{ timestamp_to_date($question->doctor->updated_at) }}</p>
                </div>
            </div>
            <div class="mt-4 text-dark-gray">{!! $question->answer !!}</div>
        </div>
    @else
        @auth
        @if (auth()->user()->role == 'doctor')
        <form action="{{ route('user.forum.answer', $question->slug) }}" class="mt-4" method="POST">
            @csrf
            <div class="h-[500px]">
                <textarea class="form-control border-0" name="answer" id="body">{{ old('body') }}</textarea>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
            </div>
            <x-main-button type="submit" class="w-full mt-4">Jawab</x-main-button>
        </form>
    @endif
        @endauth
    @endif
</x-forum-layout>
