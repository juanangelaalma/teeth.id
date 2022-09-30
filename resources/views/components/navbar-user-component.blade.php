@php
$userAuth = auth()->user();
@endphp
<x-section-component {{ $attributes->merge(['class' => 'bg-transparent py-0']) }}>
    <nav id="navbar" class="flex flex-row w-full justify-between h-[86px] items-center">
        <div class="flex">
            <h1 class="text-primary">Teeth.id</h1>
        </div>
        <ul
            class="fixed h-screen top-0 right-0 flex flex-col space-y-10 pt-28 items-center w-[85%] translate-x-full glassmorphism-box z-20 lg:bg-transparent lg:border-none lg:translate-x-0 lg:pt-0 lg:w-auto lg:space-y-0 lg:h-auto lg:static lg:flex lg:flex-row lg:space-x-10 lg:pr-3">
            <li class="text-nav-link text-dark font-normal hover:text-primary transition-colors duration-200">
                <a href="{{ route('user.home') }}">Beranda</a>
            </li>
            <li class="text-nav-link text-dark font-normal hover:text-primary transition-colors duration-200">
                <a href="{{ route('user.articles.index') }}">Artikel</a>
            </li>
            <li class="text-nav-link text-dark font-normal hover:text-primary transition-colors duration-200">
                <a href="">Behel Notification</a>
            </li>
            <li class="text-nav-link text-dark font-normal hover:text-primary transition-colors duration-200">
                <a href="">Ingin Bertanya?</a>
            </li>
            <li class="text-nav-link text-dark font-normal hover:text-primary transition-colors duration-200">
                <a href="">Buat Janji</a>
            </li>
            @if (!$userAuth)
                <x-main-button-link href="{{ route('login') }}"> Masuk </x-main-button-link>
            @endif
        </ul>
        @if ($userAuth)
            <div class="relative">
                <div id="profile"
                    class="w-10 h-10 cursor-pointer bg-dark overflow-hidden rounded-full mr-16 md:mr-2 lg:mr-0">
                    <img class="w-full h-full object-cover object-center"
                        src="{{ $userAuth->client ? $userAuth->client->photo : '/assets/images/default.jpg' }}" alt="">
                </div>
                <div id="dropdownProfile"
                    class="absolute right-12 top-12 lg:right-2 z-40 w-[200px] bg-white p-4 shadow-lg hiden-animation rounded-lg">
                    <ul class="flex flex-col w-full space-y-2">
                        <li class="w-full">
                            <a href="/profile"
                                class="py-2 w-full hover:text-primary transition-colors duration-300">Profile</a>
                        </li>
                        <li class="w-full">
                            <form action="{{ route('logout') }}" method="post" class="flex flex-start">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left hover:text-primary transition-colors duration-300">Log
                                    Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
        <button class="absolute top-4 right-3 md:block lg:hidden z-30" id="menu">
            <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M25.4584 31.3333H5.87508C5.3557 31.3333 4.85759 31.5397 4.49033 31.9069C4.12307 32.2742 3.91675 32.7723 3.91675 33.2917C3.91675 33.811 4.12307 34.3092 4.49033 34.6764C4.85759 35.0437 5.3557 35.25 5.87508 35.25H25.4584C25.9778 35.25 26.4759 35.0437 26.8432 34.6764C27.2104 34.3092 27.4167 33.811 27.4167 33.2917C27.4167 32.7723 27.2104 32.2742 26.8432 31.9069C26.4759 31.5397 25.9778 31.3333 25.4584 31.3333ZM5.87508 15.6667H41.1251C41.6445 15.6667 42.1426 15.4603 42.5098 15.0931C42.8771 14.7258 43.0834 14.2277 43.0834 13.7083C43.0834 13.189 42.8771 12.6908 42.5098 12.3236C42.1426 11.9563 41.6445 11.75 41.1251 11.75H5.87508C5.3557 11.75 4.85759 11.9563 4.49033 12.3236C4.12307 12.6908 3.91675 13.189 3.91675 13.7083C3.91675 14.2277 4.12307 14.7258 4.49033 15.0931C4.85759 15.4603 5.3557 15.6667 5.87508 15.6667V15.6667ZM41.1251 21.5417H5.87508C5.3557 21.5417 4.85759 21.748 4.49033 22.1152C4.12307 22.4825 3.91675 22.9806 3.91675 23.5C3.91675 24.0194 4.12307 24.5175 4.49033 24.8848C4.85759 25.252 5.3557 25.4583 5.87508 25.4583H41.1251C41.6445 25.4583 42.1426 25.252 42.5098 24.8848C42.8771 24.5175 43.0834 24.0194 43.0834 23.5C43.0834 22.9806 42.8771 22.4825 42.5098 22.1152C42.1426 21.748 41.6445 21.5417 41.1251 21.5417Z"
                    fill="black" />
            </svg>
        </button>
    </nav>
</x-section-component>
