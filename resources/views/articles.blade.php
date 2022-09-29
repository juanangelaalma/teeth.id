@extends('layouts.user', ['title' => 'Artikel'])

@section('content')
    @php
        $no_title = true;
    @endphp
    <div>
        <x-navbar-user-component class="bg-white"></x-navbar-user-component>
        <x-section-component class="bg-white pt-8">
            <form action="/" method="post">
                <div class="flex flex-row space-x-4">
                    <x-text-field-component></x-text-field-component>
                    <x-main-button type="submit">Cari</x-main-button>
                </div>
            </form>
        </x-section-component>
        <x-article-component no_title={{ true }} no_recommendation={{ true }} class="pb-0">
        </x-article-component>
        <x-section-component class="section-padding bg-white">
            <div class="flex flex-col lg:flex-row pb-12 lg:py-12 lg:space-x-6">
                <x-article-card-component></x-article-card-component>
                <x-article-card-component></x-article-card-component>
                <x-article-card-component></x-article-card-component>
            </div>
        </x-section-component>
        <x-footer-component></x-footer-component>
    </div>
@endsection


@section('scripts')
    @vite('resources/js/main/home.js')
@endsection
