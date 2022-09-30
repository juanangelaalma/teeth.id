@extends('layouts.user', ['title' => 'Home'])

@section('content')
    <div class="bg-primary-light">
        <x-navbar-user-component></x-navbar-user-component>
        <x-jumbotron-component></x-jumbotron-component>
        <x-features-component></x-features-component>
        <x-about-component></x-about-component>
        <x-reviews-component></x-reviews-component>
        <x-article-component :articlesRecommendation="$recommendation"></x-article-component>
        <x-footer-component></x-footer-component>
    </div>
@endsection


@section('scripts')
    @vite('resources/js/main/home.js')
@endsection