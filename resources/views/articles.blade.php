@extends('layouts.user', ['title' => 'Artikel'])

@section('content')
    @php
        $no_title = true;
    @endphp
    <div>
        <x-navbar-user-component class="bg-white"></x-navbar-user-component>
        <x-section-component class="bg-white pt-8">
            <form action="/artikel/search" method="post">
                @csrf
                <div class="flex flex-row space-x-4">
                    <x-text-field-component name="keyword"></x-text-field-component>
                    <x-main-button type="submit">Cari</x-main-button>
                </div>
            </form>
        </x-section-component>
        @isset ($recommendation)
            <x-article-component :articlesRecommendation="$recommendation" no_title={{ true }} no_recommendation={{ true }} class="pb-0">
        @endisset
        </x-article-component>
        <x-section-component class="section-padding bg-white">
            <div class="flex flex-col flex-wrap lg:flex-row pb-12 lg:py-12">
                @foreach ($articles as $article)
                <x-article-card-component :image="$article->image" :title="$article->title" :date="$article->created_at" :body="$article->body" :slug="$article->slug" />
                @endforeach
            </div>
        </x-section-component>
        <x-footer-component></x-footer-component>
    </div>
@endsection


@section('scripts')
    @vite('resources/js/dropDownProfile.js')
    @vite('resources/js/navbar.js')
@endsection
