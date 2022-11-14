@extends('layouts.user', ['title' => 'Forum'])

@section('content')
    @php
        $no_title = true;
    @endphp
    <div>
        <x-navbar-user-component class="bg-white"></x-navbar-user-component>
        <x-section-component class="section-padding bg-white w-full lg:w-[80%]">
            <div class="flex justify-between items-center">
                <h1 class="text-mb-section-header lg:text-section-header text-dark-gray font-bold">Tanya Dokter</h1>
                <x-secondary-button-link href="{{ route('user.forum.create') }}" class="font-normal flex items-center">
                    <svg class="inline-block" width="17" height="17" viewBox="0 0 17 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.1453 8.50246C15.92 8.50246 15.7038 8.59199 15.5445 8.75135C15.3851 8.91071 15.2956 9.12685 15.2956 9.35222V14.4507C15.2956 14.6761 15.206 14.8922 15.0467 15.0516C14.8873 15.211 14.6712 15.3005 14.4458 15.3005H2.54926C2.32389 15.3005 2.10775 15.211 1.94839 15.0516C1.78903 14.8922 1.69951 14.6761 1.69951 14.4507V2.55419C1.69951 2.32882 1.78903 2.11268 1.94839 1.95332C2.10775 1.79396 2.32389 1.70443 2.54926 1.70443H7.64778C7.87315 1.70443 8.08929 1.61491 8.24865 1.45555C8.40801 1.29619 8.49754 1.08005 8.49754 0.854681C8.49754 0.629312 8.40801 0.413174 8.24865 0.253814C8.08929 0.0944545 7.87315 0.00492716 7.64778 0.00492716H2.54926C1.87315 0.00492716 1.22474 0.273509 0.746661 0.751588C0.268582 1.22967 0 1.87808 0 2.55419V14.4507C0 15.1268 0.268582 15.7753 0.746661 16.2533C1.22474 16.7314 1.87315 17 2.54926 17H14.4458C15.1219 17 15.7703 16.7314 16.2484 16.2533C16.7265 15.7753 16.9951 15.1268 16.9951 14.4507V9.35222C16.9951 9.12685 16.9055 8.91071 16.7462 8.75135C16.5868 8.59199 16.3707 8.50246 16.1453 8.50246ZM3.39901 9.14828V12.7512C3.39901 12.9766 3.48854 13.1927 3.6479 13.3521C3.80726 13.5115 4.0234 13.601 4.24877 13.601H7.85172C7.96356 13.6016 8.07442 13.5802 8.17795 13.5379C8.28148 13.4956 8.37565 13.4333 8.45505 13.3546L14.3353 7.46576L16.7486 5.10345C16.8283 5.02445 16.8915 4.93047 16.9346 4.82692C16.9778 4.72337 17 4.6123 17 4.50012C17 4.38795 16.9778 4.27688 16.9346 4.17333C16.8915 4.06978 16.8283 3.97579 16.7486 3.8968L13.1457 0.251356C13.0667 0.17171 12.9727 0.108493 12.8692 0.0653519C12.7656 0.0222111 12.6545 0 12.5424 0C12.4302 0 12.3191 0.0222111 12.2156 0.0653519C12.112 0.108493 12.018 0.17171 11.939 0.251356L9.54273 2.65616L3.64544 8.54495C3.56669 8.62435 3.50438 8.71852 3.46209 8.82205C3.4198 8.92558 3.39837 9.03644 3.39901 9.14828ZM12.5424 2.05283L14.9472 4.45764L13.7405 5.66429L11.3357 3.25948L12.5424 2.05283ZM5.09852 9.49668L10.1376 4.45764L12.5424 6.86244L7.50332 11.9015H5.09852V9.49668Z"
                            fill="currentColor" />
                    </svg>
                    <span class="ml-2">Buat Pertanyaan</span>
                </x-secondary-button-link>
            </div>

            <div class="w-full flex flex-col my-8">
                <h1 class="text-semibold text-dark-gray text-content-heading">Diskusi Kesehatan Terbaru</h1>
                <div class="flex flex-col">
                    <x-question></x-question>
                </div>
            </div>
        </x-section-component>
        <x-footer-component></x-footer-component>
    </div>
@endsection


@section('scripts')
    @vite('resources/js/dropDownProfile.js')
    @vite('resources/js/navbar.js')
@endsection
