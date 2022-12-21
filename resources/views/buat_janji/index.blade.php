@extends('layouts.user', ['title' => 'Buat Janji'])

@section('content')
    <div>
        <x-navbar-user-component class="bg-white"></x-navbar-user-component>
        <div class="relative z-10">
            <div class="w-full relative bg-primary-light py-12 section-padding md:h-[250px] mx-auto flex">
                <div
                    class="relative flex flex-col md:absolute w-full md:px-[7rem] top-[50%] md:translate-y-[-50%] md:left-[50%] md:translate-x-[-50%] max-w-[1600px] z-20">
                    <h1 class="text-section-paragraph font-bold text-dark">Buat janji</h1>
                    <p class="text-[16px] text-light-gray">Buat janji dengan dokter pilihan kamu jauh lebih mudah dan
                        terpercaya</p>
                    <form method="GET" action="{{ route('buat_janji.search') }}" class="flex w-full h-11 flex-col md:flex-row my-8 space-y-3 md:space-y-0 rounded-md lg:overflow-hidden">
                        {{-- Search Lokasi --}}
                        <div class="relative marker:text-gray-600 flex-1 focus-within:text-gray-400">
                            <span class="absolute top-[50%] translate-y-[-50%] flex items-center pl-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C9.87827 2 7.84344 2.84285 6.34315 4.34315C4.84285 5.84344 4 7.87827 4 10C4 15.4 11.05 21.5 11.35 21.76C11.5311 21.9149 11.7616 22.0001 12 22.0001C12.2384 22.0001 12.4689 21.9149 12.65 21.76C13 21.5 20 15.4 20 10C20 7.87827 19.1571 5.84344 17.6569 4.34315C16.1566 2.84285 14.1217 2 12 2ZM12 19.65C9.87 17.65 6 13.34 6 10C6 8.4087 6.63214 6.88258 7.75736 5.75736C8.88258 4.63214 10.4087 4 12 4C13.5913 4 15.1174 4.63214 16.2426 5.75736C17.3679 6.88258 18 8.4087 18 10C18 13.34 14.13 17.66 12 19.65ZM12 6C11.2089 6 10.4355 6.2346 9.77772 6.67412C9.11992 7.11365 8.60723 7.73836 8.30448 8.46927C8.00173 9.20017 7.92252 10.0044 8.07686 10.7804C8.2312 11.5563 8.61216 12.269 9.17157 12.8284C9.73098 13.3878 10.4437 13.7688 11.2196 13.9231C11.9956 14.0775 12.7998 13.9983 13.5307 13.6955C14.2616 13.3928 14.8864 12.8801 15.3259 12.2223C15.7654 11.5645 16 10.7911 16 10C16 8.93913 15.5786 7.92172 14.8284 7.17157C14.0783 6.42143 13.0609 6 12 6ZM12 12C11.6044 12 11.2178 11.8827 10.8889 11.6629C10.56 11.4432 10.3036 11.1308 10.1522 10.7654C10.0009 10.3999 9.96126 9.99778 10.0384 9.60982C10.1156 9.22186 10.3061 8.86549 10.5858 8.58579C10.8655 8.30608 11.2219 8.1156 11.6098 8.03843C11.9978 7.96126 12.3999 8.00087 12.7654 8.15224C13.1308 8.30362 13.4432 8.55996 13.6629 8.88886C13.8827 9.21776 14 9.60444 14 10C14 10.5304 13.7893 11.0391 13.4142 11.4142C13.0391 11.7893 12.5304 12 12 12Z"
                                        fill="#8B8B8C" />
                                </svg>
                            </span>
                            <span class="absolute top-[50%] translate-y-[-50%] right-3 flex items-center">
                                <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_559_45)">
                                        <path
                                            d="M9.49945 6.68199C7.66448 6.68199 6.1709 8.1592 6.1709 9.97406C6.1709 11.7889 7.66448 13.2661 9.49945 13.2661C11.3344 13.2661 12.8301 11.7909 12.8301 9.97607C12.8301 8.16122 11.3365 6.68199 9.49945 6.68199ZM9.49945 12.0622C8.33507 12.0622 7.39014 11.1257 7.39014 9.97607C7.39014 8.82445 8.3371 7.88989 9.49945 7.88989C10.6618 7.88989 11.6088 8.82646 11.6088 9.97607C11.6108 11.1257 10.6638 12.0622 9.49945 12.0622Z"
                                            fill="#0061FF" />
                                        <path
                                            d="M18.3903 9.326H17.6243C17.3072 5.38075 14.1046 2.22735 10.1096 1.93393V1.13603C10.1096 0.802403 9.83732 0.533089 9.5 0.533089C9.16268 0.533089 8.89037 0.802403 8.89037 1.13603V1.93393C4.89529 2.22735 1.69272 5.38075 1.37572 9.326H0.609626C0.2723 9.326 0 9.59532 0 9.92895C0 10.2626 0.2723 10.5319 0.609626 10.5319H1.3676C1.64599 14.5193 4.86481 17.7149 8.89037 18.0124V18.7239C8.89037 19.0575 9.16268 19.3268 9.5 19.3268C9.83732 19.3268 10.1096 19.0575 10.1096 18.7239V18.0124C14.1352 17.7169 17.354 14.5193 17.6324 10.5319H18.3903C18.7277 10.5319 19 10.2626 19 9.92895C19 9.59532 18.7277 9.326 18.3903 9.326ZM10.1096 16.8025V16.1453C10.1096 15.8116 9.83732 15.5424 9.5 15.5424C9.16268 15.5424 8.89037 15.8116 8.89037 16.1453V16.8025C5.53743 16.5131 2.8632 13.8541 2.59091 10.5319H3.21476C3.55209 10.5319 3.82438 10.2626 3.82438 9.92895C3.82438 9.59532 3.55209 9.326 3.21476 9.326H2.597C2.90791 6.04399 5.56588 3.42922 8.89037 3.14182V3.71261C8.89037 4.04624 9.16268 4.31555 9.5 4.31555C9.83732 4.31555 10.1096 4.04624 10.1096 3.71261V3.14182C13.432 3.42922 16.09 6.04399 16.4029 9.326H15.7852C15.448 9.326 15.1757 9.59532 15.1757 9.92895C15.1757 10.2626 15.448 10.5319 15.7852 10.5319H16.4091C16.1368 13.8541 13.4626 16.5131 10.1096 16.8025Z"
                                            fill="#0061FF" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_559_45">
                                            <rect width="19" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <select name="location" class="input-select-search text-sm w-full py-3 border-none appearance-none outline-none focus:border-transparent focus:ring-0 text-dark pl-10 focus:outline-none focus:bg-white focus:text-gray-900" id="">
                                <option value="">Semua lokasi</option>
                                @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Search nama --}}
                        <div class="relative marker:text-gray-600 flex-1 focus-within:text-gray-400">
                            <span class="absolute top-[50%] translate-y-[-50%] flex items-center pl-4">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.33301 13.3333C10.6467 13.3333 13.333 10.647 13.333 7.33334C13.333 4.01963 10.6467 1.33334 7.33301 1.33334C4.0193 1.33334 1.33301 4.01963 1.33301 7.33334C1.33301 10.647 4.0193 13.3333 7.33301 13.3333Z"
                                        stroke="#515559" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.9999 16L11.5732 11.5733" stroke="#515559" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <input type="text" name="name"
                                class="text-sm w-full py-3 border-none pl-10 focus:outline-none focus:border-transparent focus:ring-0 focus:bg-white focus:text-gray-900"
                                placeholder="Cari berdasarkan nama dokter" autocomplete="off">
                        </div>
                        <button type="submit"
                            class="bg-primary py-2 px-7 text-white rounded-xl text-btn md:rounded-none cursor-pointer">Cari</button>
                    </form>
                </div>
            </div>
            <img class="hidden md:block absolute top-0 right-0 h-full pr-[7rem]"
                src="{{ asset('assets/images/buat-janji.png') }}" alt="">
        </div>
        <div class="section-padding bg-white pt-6 pb-8 flex flex-col lg:flex-row">
            <div class="w-full rounded-lg border border-gray-100 p-6 flex flex-col max-w-[1400px] mx-auto">
                <h1 class="font-bold text-dark text-section-paragraph">{{ $searchTitle }}</h1>
                {{-- <p class="text-light-gray font-light text-btn-more leading-5">menampilkan <span
                    class="text-dark font-medium">4</span> untuk nama <span class="text-dark font-medium">"Juan Angela
                    Alma"</span> di <span class="text-dark font-medium">Semua Lokasi</span></p> --}}
                <p class="text-light-gray font-light text-btn-more leading-5">{!! $searchDescription !!}</p>
                <hr class="text-gray-100 w-full my-6">

                @foreach ($doctors as $doctor)
                <div class="flex flex-col md:flex-row">
                    <div class="w-full overflow-hidden md:h-[140px] md:w-[140px] md:rounded-md mb-3 mx-auto">
                        <img class="w-full h-full object-cover object-center"
                            src="https://expertphotography.b-cdn.net/wp-content/uploads/2020/08/profile-photos-4.jpg"
                            alt="">
                    </div>
                    <div class="space-y-2 md:flex-1 md:flex md:flex-row md:justify-between">
                        <div class="md:px-4 mb-3 space-y-2 md:space-y-3 md:py-3">
                            <h6 class="text-left text-dark text-content-date leading-[16px] mx-auto">dr.
                                {{ $doctor->name }}</h6>
                            <p class="text-light-gray">Dokter Gigi</p>
                            <div class="flex flex-row items-end justify-start space-x-2 text-dark-gray mx-auto">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 15H9V16C9 16.2652 9.10536 16.5196 9.29289 16.7071C9.48043 16.8946 9.73478 17 10 17C10.2652 17 10.5196 16.8946 10.7071 16.7071C10.8946 16.5196 11 16.2652 11 16V15H12C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14C13 13.7348 12.8946 13.4804 12.7071 13.2929C12.5196 13.1054 12.2652 13 12 13H11V12C11 11.7348 10.8946 11.4804 10.7071 11.2929C10.5196 11.1054 10.2652 11 10 11C9.73478 11 9.48043 11.1054 9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12V13H8C7.73478 13 7.48043 13.1054 7.29289 13.2929C7.10536 13.4804 7 13.7348 7 14C7 14.2652 7.10536 14.5196 7.29289 14.7071C7.48043 14.8946 7.73478 15 8 15V15ZM17 4H15V3C15 2.20435 14.6839 1.44129 14.1213 0.87868C13.5587 0.316071 12.7956 0 12 0H8C7.20435 0 6.44129 0.316071 5.87868 0.87868C5.31607 1.44129 5 2.20435 5 3V4H3C2.20435 4 1.44129 4.31607 0.87868 4.87868C0.316071 5.44129 0 6.20435 0 7V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V7C20 6.20435 19.6839 5.44129 19.1213 4.87868C18.5587 4.31607 17.7956 4 17 4ZM7 3C7 2.73478 7.10536 2.48043 7.29289 2.29289C7.48043 2.10536 7.73478 2 8 2H12C12.2652 2 12.5196 2.10536 12.7071 2.29289C12.8946 2.48043 13 2.73478 13 3V4H7V3ZM18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V10H18V17ZM18 8H2V7C2 6.73478 2.10536 6.48043 2.29289 6.29289C2.48043 6.10536 2.73478 6 3 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8946 6.48043 18 6.73478 18 7V8Z"
                                        fill="#515559" />
                                </svg>
                                <p class="text-content-paragraph leading-none font-normal text-dark-gray">{{ $doctor->clinic->name }}</p>
                            </div>
                            <div class="flex justify-start">
                                <div class="bg-primary-light px-3 py-1 rounded-xl">
                                    <p class="text-sm text-light-gray"><span class="text-primary font-semibold">10
                                            pasien</span>
                                        telah
                                        membuat janji</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col pt-4">
                            <div class="flex flex-row justify-between md:flex-col">
                                <p class="text-content-paragraph font-medium text-dark">Biaya Konsultasi</p>
                                <p class="text-content-paragraph font-semibold text-primary">{{ to_rupiah($doctor->clinic->price) }}</p>
                            </div>
                            {{-- ini nih sebenarnya user->id --}}
                            <x-main-button-link href="{{ route('buat_janji.pilih_jadwal', $doctor->id) }}" class="text-center mt-2 bg-secondary shadow-none">Buat janji
                            </x-main-button-link>
                        </div>
                    </div>
                </div>
                <hr class="text-gray-100 w-full my-6">
                @endforeach
            </div>
        </div>
        <x-footer-component></x-footer-component>
    </div>
@endsection