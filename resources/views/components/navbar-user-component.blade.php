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
            <li class="text-md text-dark font-normal hover:text-primary transition-colors duration-200">
                <a href="{{ route('user.home') }}">Beranda</a>
            </li>
            <li class="text-md text-dark font-normal hover:text-primary transition-colors duration-200">
                <a href="{{ route('user.articles.index') }}">Artikel</a>
            </li>
            <li class="text-md text-dark font-normal hover:text-primary transition-colors duration-200">
                <a href="">Behel Notification</a>
            </li>
            <li class="text-md text-dark font-normal hover:text-primary transition-colors duration-200">
                <a href="">Ingin Bertanya?</a>
            </li>
            <li class="text-md text-dark font-normal hover:text-primary transition-colors duration-200">
                <a href="">Buat Janji</a>
            </li>
            @if (!$userAuth)
                <x-main-button-link href="{{ route('login') }}"> Masuk </x-main-button-link>
            @endif
        </ul>
        @if ($userAuth)
            <!-- Settings Dropdown -->
            <div class="flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div
                                class="cursor-pointer lg:border flex justify-start items-center mr-16 lg:mr-0 py-1 space-x-2 px-3 rounded-lg">
                                @if ($userAuth->isDoctor())
                                    <div class="w-10 h-10 overflow-hidden rounded-full md:mr-2 lg:mr-0">
                                        <img class="w-full h-full object-cover object-center"
                                            src="{{ $userAuth->doctor && $userAuth->doctor->photo ? $userAuth->doctor->photo : '/assets/images/default.jpg' }}"
                                            alt="">
                                    </div>
                                    <span class="text-sm hidden lg:block">dr. {{ $userAuth->name }} </span>
                                    @if ($userAuth->isVerified())
                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.9086 0L13.3799 2.27486L16.0859 2.41029L16.2226 5.11586L18.4987 6.58586L17.264 8.99786L18.5 11.4086L16.2251 12.8799L16.0897 15.5859L13.3841 15.7226L11.9141 17.9987L9.50214 16.764L7.09143 18L5.62014 15.7251L2.91414 15.5897L2.77743 12.8841L0.501286 11.4141L1.736 9.00214L0.5 6.59143L2.77486 5.12014L2.91029 2.41414L5.61586 2.27743L7.08586 0.00128572L9.49786 1.236L11.9086 0Z"
                                                fill="#42A5F5" />
                                            <path
                                                d="M8.38398 12.1093L5.59955 9.3257L6.50898 8.4167L8.39769 10.3054L12.4983 6.33084L13.3931 7.25398L8.38398 12.1093Z"
                                                fill="white" />
                                        </svg>
                                    @endif
                                @else
                                    <div class="w-10 h-10 overflow-hidden rounded-full md:mr-2 lg:mr-0">
                                        <img class="w-full h-full object-cover object-center"
                                            src="{{ $userAuth->client && $userAuth->client->photo ? $userAuth->client->photo : '/assets/images/default.jpg' }}"
                                            alt="">
                                    </div>
                                    <span class="text-sm hidden lg:block">{{ $userAuth->name }} </span>
                                @endif
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        @if ($userAuth->isDoctor())
                            <x-dropdown-link href="{{ route('doctor.dashboard') }}">
                                {{ __('Dashboard') }}
                            </x-dropdown-link>
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
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
