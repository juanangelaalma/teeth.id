@extends('layouts.user', ['title' => 'Artikel'])

@section('content')
    <div>
        <x-navbar-user-component class="bg-white"></x-navbar-user-component>
        <div class="flex flex-col section-padding lg:flex-row py-12">
            <div class="w-full lg:w-3/5 lg:pr-10">
                <div class="p-4 w-full border border-gray-100 flex-col">
                    <div class="rounded-lg flex flex-col lg:flex-row">
                        <div class="w-full overflow-hidden md:h-[140px] md:w-[140px] rounded-md mb-3 mx-auto lg:mx-0">
                            <img class="w-full h-full object-cover object-center"
                                src="{{ $user->doctor->photo ? $user->doctor->photo : '/assets/images/default.jpg' }}"
                                alt="">
                        </div>
                        <div class="md:px-4 mb-3 space-y-2 md:space-y-3 md:py-3">
                            <h6 class="text-left text-dark text-content-date leading-[16px] mx-auto">dr.
                                {{ $user->name }}</h6>
                            <p class="text-light-gray">Dokter Gigi</p>
                            <div class="flex flex-row items-end justify-start space-x-2 text-dark-gray mx-auto">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 15H9V16C9 16.2652 9.10536 16.5196 9.29289 16.7071C9.48043 16.8946 9.73478 17 10 17C10.2652 17 10.5196 16.8946 10.7071 16.7071C10.8946 16.5196 11 16.2652 11 16V15H12C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14C13 13.7348 12.8946 13.4804 12.7071 13.2929C12.5196 13.1054 12.2652 13 12 13H11V12C11 11.7348 10.8946 11.4804 10.7071 11.2929C10.5196 11.1054 10.2652 11 10 11C9.73478 11 9.48043 11.1054 9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12V13H8C7.73478 13 7.48043 13.1054 7.29289 13.2929C7.10536 13.4804 7 13.7348 7 14C7 14.2652 7.10536 14.5196 7.29289 14.7071C7.48043 14.8946 7.73478 15 8 15V15ZM17 4H15V3C15 2.20435 14.6839 1.44129 14.1213 0.87868C13.5587 0.316071 12.7956 0 12 0H8C7.20435 0 6.44129 0.316071 5.87868 0.87868C5.31607 1.44129 5 2.20435 5 3V4H3C2.20435 4 1.44129 4.31607 0.87868 4.87868C0.316071 5.44129 0 6.20435 0 7V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V7C20 6.20435 19.6839 5.44129 19.1213 4.87868C18.5587 4.31607 17.7956 4 17 4ZM7 3C7 2.73478 7.10536 2.48043 7.29289 2.29289C7.48043 2.10536 7.73478 2 8 2H12C12.2652 2 12.5196 2.10536 12.7071 2.29289C12.8946 2.48043 13 2.73478 13 3V4H7V3ZM18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V10H18V17ZM18 8H2V7C2 6.73478 2.10536 6.48043 2.29289 6.29289C2.48043 6.10536 2.73478 6 3 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8946 6.48043 18 6.73478 18 7V8Z"
                                        fill="#515559" />
                                </svg>
                                <p class="text-content-paragraph leading-none font-normal text-dark-gray">
                                    {{ $user->clinic->name }}</p>
                            </div>
                            <div class="flex justify-start">
                                <div class="bg-primary-light px-3 py-1 rounded-xl">
                                    <p class="text-sm text-light-gray"><span class="text-primary font-semibold">{{  $user->orders ? $user->orders()->count() : 0 }}
                                            pasien</span>
                                        telah
                                        membuat janji</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="font-bold text-content-date text-dark mt-3">Tentang dokter</h6>
                    <p class="font-light text-content-paragraph text-light-gray">{{ $user->doctor->description }}</p>
                </div>
            </div>
            <div class="w-full lg:w-2/5">
                <div class="w-full p-4 border border-gray-100 rounded-lg">
                    <h6 class="font-bold text-content-date text-dark">Tentang dokter</h6>
                    <p class="text-light-gray">dr. {{ $user->name }}</p>
                    <hr class="text-gray-100 w-full my-6">
                    <div class="flex flex-row items-center justify-start">
                        <div class="overflow-hidden h-[60px] w-[60px] rounded-md">
                            <img class="w-full h-full object-cover object-center"
                                src="{{ $user->doctor->photo ? $user->doctor->photo : '/assets/images/default.jpg' }}"
                                alt="">
                        </div>
                        <div class="flex flex-col pl-4">
                            <h6 class="font-bold text-mb-content-paragraph">{{ $user->clinic->name }}</h6>
                            <span class="font-light text-light-gray text-mb-content-paragraph">Kota
                                {{ $city->name }}</span>
                        </div>
                    </div>
                    <hr class="text-gray-100 w-full my-6">

                    {{-- Date Input --}}
                    <form action="{{ route('buat_janji.post_pilih_jadwal', $user->id) }}" method="POST">
                        @csrf
                        <ul id="filter1"
                            class="filter-switch flex items-center relative h-14 p-1 space-x-3 rounded-md font-semibold text-primary my-4">
                            <li
                                class="filter-switch-item flex justify-center items-center relative w-14 h-14 bg-primary-light">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 2H15V1C15 0.734784 14.8946 0.48043 14.7071 0.292893C14.5196 0.105357 14.2652 0 14 0C13.7348 0 13.4804 0.105357 13.2929 0.292893C13.1054 0.48043 13 0.734784 13 1V2H7V1C7 0.734784 6.89464 0.48043 6.70711 0.292893C6.51957 0.105357 6.26522 0 6 0C5.73478 0 5.48043 0.105357 5.29289 0.292893C5.10536 0.48043 5 0.734784 5 1V2H3C2.20435 2 1.44129 2.31607 0.87868 2.87868C0.316071 3.44129 0 4.20435 0 5V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V5C20 4.20435 19.6839 3.44129 19.1213 2.87868C18.5587 2.31607 17.7956 2 17 2ZM18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V10H18V17ZM18 8H2V5C2 4.73478 2.10536 4.48043 2.29289 4.29289C2.48043 4.10536 2.73478 4 3 4H5V5C5 5.26522 5.10536 5.51957 5.29289 5.70711C5.48043 5.89464 5.73478 6 6 6C6.26522 6 6.51957 5.89464 6.70711 5.70711C6.89464 5.51957 7 5.26522 7 5V4H13V5C13 5.26522 13.1054 5.51957 13.2929 5.70711C13.4804 5.89464 13.7348 6 14 6C14.2652 6 14.5196 5.89464 14.7071 5.70711C14.8946 5.51957 15 5.26522 15 5V4H17C17.2652 4 17.5196 4.10536 17.7071 4.29289C17.8946 4.48043 18 4.73478 18 5V8Z"
                                        fill="#515559" />
                                </svg>
                            </li>
                            <li class="filter-switch-item flex relative h-14">
                                <input type="radio" checked name="date" value="today" id="date-0" class="sr-only">
                                <label for="date-0" onclick="getByDay('today', {{ $user->clinic->id }})"
                                    class="border border-primary-light h-14 py-1 px-4 text-sm text-center leading-6 text-light-gray font-normal bg-primary-light rounded flex justify-center items-center">
                                    <span class="text-[10px] md:text-sm block">Hari ini</span>
                                    @php
                                        $isTodayExist = false;
                                    @endphp
                                    @foreach ($user->schedules as $item)
                                        @if ($item->day === $today)
                                            @php
                                                $isTodayExist = true;
                                            @endphp
                                        @endif
                                    @endforeach
                                </label>
                                <div aria-hidden="true" class="filter-active"></div>
                            </li>
                            <li class="filter-switch-item flex relative h-14">
                                <input type="radio" value="tomorrow" name="date" id="date-1" class="sr-only">
                                <label for="date-1" onclick="getByDay('tomorrow', {{ $user->clinic->id }})"
                                    class="border border-primary-light h-14 py-1 px-4 text-sm text-center leading-6 text-light-gray font-normal bg-primary-light rounded flex justify-center items-center">
                                    <span class="text-[10px] md:text-sm block">Besok</span>
                                </label>
                                <div aria-hidden="true" class="filter-active"></div>
                            </li>
                            <li class="filter-switch-item flex relative h-14">
                                <input type="radio" value="after_tomorrow" name="date" id="date-2" class="sr-only">
                                <label for="date-2" onclick="getByDay('after_tomorrow', {{ $user->clinic->id }})"
                                    class="border border-primary-light h-auto py-1 px-4 text-sm text-center leading-6 text-light-gray font-normal bg-primary-light rounded flex justify-center items-center">
                                    <span class="text-[10px] md:text-sm block">Lusa</span>
                                </label>
                                <div aria-hidden="true" class="filter-active"></div>
                            </li>
                        </ul>
                        <div class="flex flex-col mb-4">
                            <div class="inline-flex items-center space-x-3">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26.25 10.75C25.95 10.45 25.475 10.45 25.2 10.75L22.15 13.775C20.675 12.5 18.8 11.7 16.75 11.525V7.25C16.75 6.825 16.425 6.5 16 6.5C15.575 6.5 15.25 6.825 15.25 7.25V11.525C13.2 11.675 11.325 12.5 9.85 13.775L6.8 10.75C6.5 10.45 6.025 10.45 5.75 10.75C5.45 11.05 5.45 11.525 5.75 11.8L8.775 14.825C7.5 16.3 6.7 18.175 6.525 20.225H2.25C1.825 20.225 1.5 20.55 1.5 20.975C1.5 21.4 1.825 21.725 2.25 21.725H29.75C30.175 21.725 30.5 21.4 30.5 20.975C30.5 20.55 30.175 20.225 29.75 20.225H25.475C25.325 18.175 24.5 16.3 23.225 14.825L26.25 11.8C26.55 11.525 26.55 11.05 26.25 10.75ZM23.975 20.25H8.025C8.425 16.2 11.85 13 16 13C20.15 13 23.575 16.2 23.975 20.25Z"
                                        fill="black" />
                                </svg>
                                <span class="font-bold text-dark text-content-paragraph">Pagi</span>
                            </div>

                            {{-- Hour Input --}}
                            <ul id="morning" class="inline-flex justify-start items-center mt-1 space-x-3 text-primary">
                                <li class="filter-switch-item relative hidden">
                                    <input type="radio" name="hour" id="hour-0" class="sr-only">
                                    <label for="hour-0"
                                        class="border border-primary-light cursor-pointer h-auto py-1 px-4 text-sm text-center leading-6 text-light-gray font-normal bg-primary-light rounded">
                                        <span class="text-[10px] md:text-sm block">09:00</span>
                                    </label>
                                    <div aria-hidden="true" class="filter-active"></div>
                                </li>
                            </ul>
                        </div>

                        <div class="flex flex-col mb-4">
                            <div class="inline-flex items-center space-x-3">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.9403 2.54C15.9128 2.545 15.8853 2.5525 15.8603 2.56C15.5628 2.6275 15.3528 2.895 15.3603 3.2V7.04C15.3578 7.27 15.4778 7.485 15.6778 7.6025C15.8778 7.7175 16.1228 7.7175 16.3228 7.6025C16.5228 7.485 16.6428 7.27 16.6403 7.04V3.2C16.6478 3.015 16.5728 2.8375 16.4403 2.7125C16.3053 2.585 16.1228 2.5225 15.9403 2.54ZM6.82029 6.3C6.58029 6.3425 6.38779 6.5175 6.32029 6.75C6.25279 6.985 6.32279 7.235 6.50029 7.4L9.22029 10.12C9.37529 10.31 9.62279 10.3975 9.86279 10.3425C10.1003 10.2875 10.2878 10.1 10.3428 9.8625C10.3978 9.6225 10.3103 9.375 10.1203 9.22L7.40029 6.5C7.26779 6.3575 7.07529 6.285 6.88029 6.3C6.86029 6.3 6.84029 6.3 6.82029 6.3ZM24.9803 6.3C24.8353 6.32 24.7003 6.3925 24.6003 6.5L21.8803 9.22C21.6903 9.375 21.6028 9.6225 21.6578 9.8625C21.7128 10.1 21.9003 10.2875 22.1378 10.3425C22.3778 10.3975 22.6253 10.31 22.7803 10.12L25.5003 7.4C25.7003 7.21 25.7578 6.9125 25.6403 6.6625C25.5203 6.41 25.2553 6.265 24.9803 6.3ZM15.9403 9.6C15.9203 9.605 15.9003 9.6125 15.8803 9.62C15.8403 9.6225 15.8003 9.63 15.7603 9.64C15.7528 9.6475 15.7478 9.6525 15.7403 9.66C12.3453 9.805 9.60029 12.57 9.60029 16C9.60029 19.5225 12.4778 22.4 16.0003 22.4C19.5228 22.4 22.4003 19.5225 22.4003 16C22.4003 12.5825 19.6778 9.8275 16.3003 9.66C16.2778 9.66 16.2628 9.64 16.2403 9.64C16.1753 9.615 16.1078 9.6025 16.0403 9.6C16.0278 9.6 16.0128 9.6 16.0003 9.6C15.9803 9.6 15.9603 9.6 15.9403 9.6ZM15.9603 10.88C15.9728 10.88 15.9878 10.88 16.0003 10.88C16.0203 10.88 16.0403 10.88 16.0603 10.88C18.8603 10.9125 21.1203 13.1925 21.1203 16C21.1203 18.83 18.8303 21.12 16.0003 21.12C13.1728 21.12 10.8803 18.83 10.8803 16C10.8803 13.185 13.1503 10.9025 15.9603 10.88ZM3.02029 15.36C2.66779 15.41 2.42029 15.7375 2.47029 16.09C2.52029 16.4425 2.84779 16.69 3.20029 16.64H7.04029C7.27029 16.6425 7.48529 16.5225 7.60279 16.3225C7.71779 16.1225 7.71779 15.8775 7.60279 15.6775C7.48529 15.4775 7.27029 15.3575 7.04029 15.36H3.20029C3.18029 15.36 3.16029 15.36 3.14029 15.36C3.12029 15.36 3.10029 15.36 3.08029 15.36C3.06029 15.36 3.04029 15.36 3.02029 15.36ZM24.7803 15.36C24.4278 15.41 24.1803 15.7375 24.2303 16.09C24.2803 16.4425 24.6078 16.69 24.9603 16.64H28.8003C29.0303 16.6425 29.2453 16.5225 29.3628 16.3225C29.4778 16.1225 29.4778 15.8775 29.3628 15.6775C29.2453 15.4775 29.0303 15.3575 28.8003 15.36H24.9603C24.9403 15.36 24.9203 15.36 24.9003 15.36C24.8803 15.36 24.8603 15.36 24.8403 15.36C24.8203 15.36 24.8003 15.36 24.7803 15.36ZM9.60029 21.68C9.45529 21.7 9.32029 21.7725 9.22029 21.88L6.50029 24.6C6.31029 24.755 6.22279 25.0025 6.27779 25.2425C6.33279 25.48 6.52029 25.6675 6.75779 25.7225C6.99779 25.7775 7.24529 25.69 7.40029 25.5L10.1203 22.78C10.3103 22.5975 10.3678 22.315 10.2653 22.0725C10.1653 21.83 9.92279 21.675 9.66029 21.68C9.64029 21.68 9.62029 21.68 9.60029 21.68ZM22.2003 21.68C21.9603 21.7225 21.7678 21.8975 21.7003 22.13C21.6328 22.365 21.7028 22.615 21.8803 22.78L24.6003 25.5C24.7553 25.69 25.0028 25.7775 25.2428 25.7225C25.4803 25.6675 25.6678 25.48 25.7228 25.2425C25.7778 25.0025 25.6903 24.755 25.5003 24.6L22.7803 21.88C22.6603 21.7525 22.4953 21.6825 22.3203 21.68C22.3003 21.68 22.2803 21.68 22.2603 21.68C22.2403 21.68 22.2203 21.68 22.2003 21.68ZM15.9403 24.3C15.9128 24.305 15.8853 24.3125 15.8603 24.32C15.5628 24.3875 15.3528 24.655 15.3603 24.96V28.8C15.3578 29.03 15.4778 29.245 15.6778 29.3625C15.8778 29.4775 16.1228 29.4775 16.3228 29.3625C16.5228 29.245 16.6428 29.03 16.6403 28.8V24.96C16.6478 24.775 16.5728 24.5975 16.4403 24.4725C16.3053 24.345 16.1228 24.2825 15.9403 24.3Z"
                                        fill="black" />
                                </svg>
                                <span class="font-bold text-dark text-content-paragraph">Siang</span>
                            </div>

                            {{-- Hour Input --}}
                            <ul id="afternoon" class="inline-flex justify-start items-center mt-1 space-x-3 text-primary">

                            </ul>
                        </div>

                        <div class="flex flex-col mb-4">
                            <div class="inline-flex items-center space-x-3">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.1804 3.82C10.1529 3.825 10.1254 3.8325 10.1004 3.84C9.80286 3.9075 9.59286 4.175 9.60036 4.48V5.12H8.96036C8.94036 5.12 8.92036 5.12 8.90036 5.12C8.54786 5.1375 8.27286 5.4375 8.29036 5.79C8.30786 6.1425 8.60786 6.4175 8.96036 6.4H9.60036V7.04C9.59786 7.27 9.71786 7.485 9.91786 7.6025C10.1179 7.7175 10.3629 7.7175 10.5629 7.6025C10.7629 7.485 10.8829 7.27 10.8804 7.04V6.4H11.5204C11.7504 6.4025 11.9654 6.2825 12.0829 6.0825C12.1979 5.8825 12.1979 5.6375 12.0829 5.4375C11.9654 5.2375 11.7504 5.1175 11.5204 5.12H10.8804V4.48C10.8879 4.295 10.8129 4.1175 10.6804 3.9925C10.5454 3.865 10.3629 3.8025 10.1804 3.82ZM18.1204 8.3L17.2804 8.42C12.9404 9.04 9.60036 12.7725 9.60036 17.28C9.60036 22.22 13.6204 26.24 18.5604 26.24C23.0679 26.24 26.7979 22.9 27.4204 18.56L27.5404 17.72L26.7004 17.84C26.3279 17.8925 25.9629 17.92 25.6004 17.92C21.3504 17.92 17.9204 14.49 17.9204 10.24C17.9204 9.8775 17.9479 9.5125 18.0004 9.14L18.1204 8.3ZM16.6604 9.94C16.6554 10.0425 16.6404 10.135 16.6404 10.24C16.6404 15.18 20.6604 19.2 25.6004 19.2C25.7054 19.2 25.7979 19.185 25.9004 19.18C25.0429 22.485 22.1379 24.96 18.5604 24.96C14.3104 24.96 10.8804 21.53 10.8804 17.28C10.8804 13.7025 13.3554 10.795 16.6604 9.94ZM5.06036 11.5C5.03286 11.505 5.00536 11.5125 4.98036 11.52C4.68286 11.5875 4.47286 11.855 4.48036 12.16C4.46036 12.16 4.44036 12.16 4.42036 12.16C4.06786 12.1775 3.79286 12.4775 3.81036 12.83C3.82786 13.1825 4.12786 13.4575 4.48036 13.44C4.47786 13.67 4.59786 13.885 4.79786 14.0025C4.99786 14.1175 5.24286 14.1175 5.44286 14.0025C5.64286 13.885 5.76286 13.67 5.76036 13.44C5.99036 13.4425 6.20536 13.3225 6.32286 13.1225C6.43786 12.9225 6.43786 12.6775 6.32286 12.4775C6.20536 12.2775 5.99036 12.1575 5.76036 12.16C5.76786 11.975 5.69286 11.7975 5.56036 11.6725C5.42536 11.545 5.24286 11.4825 5.06036 11.5Z"
                                        fill="black" />
                                </svg>
                                <span class="font-bold text-dark text-content-paragraph">Malam</span>
                            </div>

                            {{-- Hour Input --}}
                            <ul id="night" class="inline-flex justify-start items-center mt-1 space-x-3 text-primary">

                            </ul>
                        </div>
                        <hr class="text-gray-100 w-full my-6">
                        <div class="my-6 flex justify-center items-center">
                            <x-main-button type="submit" class="px-20 mx-auto shadow-none w-full text-center">Buat
                                janji
                            </x-main-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <x-footer-component></x-footer-component>

        <div class="opacity-0 h-0 w-0 rounded-lg animate-pulse bg-primary-light"></div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/dropDownProfile.js')
    @vite('resources/js/navbar.js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        const morning = document.getElementById('morning')
        const afternoon = document.getElementById('afternoon')
        const night = document.getElementById('night')

        function refresh() {
            morning.innerHTML = ''
            afternoon.innerHTML = ''
            night.innerHTML = ''
        }

        function appendToElement(hours) {
            hours.forEach(hour => {
                const currentHour = hour.hour.slice(0, 2)
                const numericHour = parseInt(currentHour)
                const cdiv = document.createElement('div')
                cdiv.innerHTML = `
              <li class="filter-switch-item flex relative">
                <input type="radio" value="${hour.hour}" name="hour" id="hour-${numericHour}" class="sr-only">
                <label for="hour-${numericHour}" class="border border-primary-light cursor-pointer h-auto py-1 px-4 text-sm text-center leading-6 text-light-gray font-normal bg-primary-light rounded">
                  <span class="text-[10px] md:text-sm block">${hour.hour}</span>
                </label>
                <div aria-hidden="true" class="filter-active"></div>
              </li>
            `
                if (numericHour > 17) {
                    night.append(cdiv)
                } else if (numericHour > 10) {
                    afternoon.append(cdiv)
                } else {
                    morning.append(cdiv)
                }
            });
        }

        function loading() {
            const loader = `<div class="w-20 h-10 rounded-lg animate-pulse bg-primary-light"></div>
                              <div class="w-20 h-10 rounded-lg animate-pulse bg-primary-light"></div>
                              <div class="w-20 h-10 rounded-lg animate-pulse bg-primary-light"></div>`

            morning.innerHTML = loader
            afternoon.innerHTML = loader
            night.innerHTML = loader
        }

        async function getByDay(day, clinic_id) {
            loading()
            const response = await axios.get(`/api/schedule_hours/${day}/${clinic_id}`)
            console.log(response.data)
            const data = response?.data
            const hours = data[0]?.hours
            refresh()
            appendToElement(hours)
        }
    </script>
@endsection
