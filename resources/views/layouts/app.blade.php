<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="/assets/brand.png">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        @if (isset($styles))
            {{ $styles }}
        @endif

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/navbar.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-primary-light">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow section-padding mb-6">
                    <div class="max-w-[1400px] mx-auto py-6">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="section-padding">
                <div class="max-w-[1400px] mx-auto">
                    {{ $slot }}
                </div>
            </main>
        </div>
        @if (isset($scripts))
            {{ $scripts }}
        @endif
    </body>
</html>
