@extends('layouts.user', ['title' => 'Artikel'])

@section('content')
    <div>
        <x-navbar-user-component class="bg-white"></x-navbar-user-component>
        <div class="section-padding bg-white pt-6 pb-8 flex flex-col lg:flex-row">
            <div class="w-full lg:w-3/4 space-y-6 lg:border-r lg:pr-8">
                <div class="flex flex-row justify-between">
                    <div class="flex flex-row space-x-4">
                        <div class="w-[50px] h-[50px] rounded-full overflow-hidden">
                            <img class="w-full h-full object-cover object-center"
                                src="{{ $article->doctor->photo ? $article->doctor->photo : '/assets/images/default.jpg' }}"
                                alt="">
                        </div>
                        <div class="flex flex-col">
                            <h6 class="text-paragraph text-dark-gray">dr. {{ $article->doctor->user->name }}</h6>
                            <p class="text-mb-content-pragraph text-light-gray">
                                {{ timestamp_to_date($article->created_at) }}</p>
                        </div>
                    </div>
                    <div class="flex flex-row space-x-2 justify-end items-center">
                        <a>
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.2875 1.75H2.7125C2.45723 1.75 2.21241 1.85141 2.03191 2.03191C1.85141 2.21241 1.75 2.45723 1.75 2.7125V18.2875C1.75 18.4139 1.7749 18.5391 1.82327 18.6558C1.87164 18.7726 1.94253 18.8787 2.03191 18.9681C2.12129 19.0575 2.22739 19.1284 2.34417 19.1767C2.46094 19.2251 2.5861 19.25 2.7125 19.25H11.095V12.4688H8.82V9.84375H11.095V7.875C11.0479 7.41279 11.1024 6.94586 11.2549 6.50697C11.4073 6.06808 11.6539 5.66785 11.9774 5.33436C12.3009 5.00087 12.6934 4.74219 13.1275 4.57646C13.5615 4.41073 14.0266 4.34197 14.49 4.375C15.171 4.37081 15.8517 4.40587 16.5287 4.48V6.8425H15.1375C14.035 6.8425 13.825 7.3675 13.825 8.12875V9.8175H16.45L16.1087 12.4425H13.825V19.25H18.2875C18.4139 19.25 18.5391 19.2251 18.6558 19.1767C18.7726 19.1284 18.8787 19.0575 18.9681 18.9681C19.0575 18.8787 19.1284 18.7726 19.1767 18.6558C19.2251 18.5391 19.25 18.4139 19.25 18.2875V2.7125C19.25 2.5861 19.2251 2.46094 19.1767 2.34417C19.1284 2.22739 19.0575 2.12129 18.9681 2.03191C18.8787 1.94253 18.7726 1.87164 18.6558 1.82327C18.5391 1.7749 18.4139 1.75 18.2875 1.75Z"
                                    fill="#8B8B8C" />
                            </svg>
                        </a>
                        <a>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.3337 5.075C17.7073 5.36033 17.0448 5.54896 16.367 5.635C17.0821 5.18641 17.6181 4.48068 17.8753 3.64875C17.2033 4.06881 16.4676 4.36476 15.7003 4.52375C15.1874 3.93975 14.5045 3.55101 13.7585 3.4185C13.0125 3.28598 12.2458 3.41719 11.5785 3.79154C10.9112 4.16589 10.3811 4.76221 10.0714 5.48698C9.76162 6.21175 9.68974 7.02397 9.86699 7.79625C8.50818 7.72409 7.17903 7.35258 5.96587 6.70588C4.75272 6.05917 3.6827 5.15173 2.82533 4.0425C2.52461 4.5939 2.36659 5.21834 2.36699 5.85375C2.36593 6.44383 2.50384 7.02504 2.76845 7.54562C3.03307 8.0662 3.41617 8.51 3.88366 8.8375C3.34031 8.82198 2.80856 8.66889 2.33366 8.39125V8.435C2.33773 9.26178 2.61365 10.0617 3.11475 10.6995C3.61585 11.3372 4.31137 11.7737 5.08366 11.935C4.78637 12.03 4.47772 12.0801 4.16699 12.0838C3.9519 12.0811 3.73734 12.0606 3.52533 12.0225C3.74525 12.7337 4.17084 13.3553 4.74289 13.8006C5.31493 14.246 6.00497 14.4931 6.71699 14.5075C5.51466 15.5009 4.03023 16.043 2.50033 16.0475C2.22177 16.0485 1.94344 16.0309 1.66699 15.995C3.22902 17.054 5.04934 17.6161 6.90866 17.6137C8.19174 17.6277 9.46461 17.3731 10.6529 16.8648C11.8412 16.3565 12.9212 15.6046 13.8297 14.6532C14.7381 13.7017 15.457 12.5697 15.9441 11.3233C16.4313 10.0769 16.677 8.74101 16.667 7.39375C16.667 7.245 16.667 7.0875 16.667 6.93C17.3209 6.41796 17.8849 5.79025 18.3337 5.075Z"
                                    fill="#8B8B8C" />
                            </svg>
                        </a>
                        <a>
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.9115 1.75H3.08898C2.92237 1.74769 2.75692 1.77822 2.6021 1.83985C2.44729 1.90148 2.30612 1.99301 2.18668 2.1092C2.06724 2.22539 1.97186 2.36397 1.90598 2.51703C1.8401 2.67009 1.80502 2.83463 1.80273 3.00125V17.9987C1.80502 18.1654 1.8401 18.3299 1.90598 18.483C1.97186 18.636 2.06724 18.7746 2.18668 18.8908C2.30612 19.007 2.44729 19.0985 2.6021 19.1602C2.75692 19.2218 2.92237 19.2523 3.08898 19.25H17.9115C18.0781 19.2523 18.2435 19.2218 18.3984 19.1602C18.5532 19.0985 18.6943 19.007 18.8138 18.8908C18.9332 18.7746 19.0286 18.636 19.0945 18.483C19.1604 18.3299 19.1955 18.1654 19.1977 17.9987V3.00125C19.1955 2.83463 19.1604 2.67009 19.0945 2.51703C19.0286 2.36397 18.9332 2.22539 18.8138 2.1092C18.6943 1.99301 18.5532 1.90148 18.3984 1.83985C18.2435 1.77822 18.0781 1.74769 17.9115 1.75ZM7.07898 16.3975H4.45398V8.5225H7.07898V16.3975ZM5.76648 7.42C5.40446 7.42 5.05727 7.27619 4.80128 7.0202C4.5453 6.76421 4.40148 6.41702 4.40148 6.055C4.40148 5.69298 4.5453 5.34579 4.80128 5.0898C5.05727 4.83381 5.40446 4.69 5.76648 4.69C5.95872 4.6682 6.15339 4.68725 6.33775 4.7459C6.52211 4.80455 6.69201 4.90148 6.83631 5.03034C6.98061 5.1592 7.09607 5.31709 7.17512 5.49367C7.25417 5.67025 7.29504 5.86153 7.29504 6.055C7.29504 6.24847 7.25417 6.43975 7.17512 6.61633C7.09607 6.79291 6.98061 6.9508 6.83631 7.07966C6.69201 7.20852 6.52211 7.30545 6.33775 7.3641C6.15339 7.42275 5.95872 7.4418 5.76648 7.42ZM16.5465 16.3975H13.9215V12.1712C13.9215 11.1125 13.5452 10.4213 12.5915 10.4213C12.2963 10.4234 12.0089 10.516 11.768 10.6865C11.527 10.8571 11.3442 11.0973 11.244 11.375C11.1755 11.5807 11.1458 11.7973 11.1565 12.0137V16.3887H8.53148C8.53148 16.3887 8.53148 9.23125 8.53148 8.51375H11.1565V9.625C11.3949 9.21122 11.7418 8.87033 12.1596 8.63905C12.5775 8.40777 13.0505 8.29487 13.5277 8.3125C15.2777 8.3125 16.5465 9.44125 16.5465 11.865V16.3975Z"
                                    fill="#8B8B8C" />
                            </svg>
                        </a>
                        <div>
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.75035 15.3562L7.20159 16.8612C6.79548 17.2674 6.24468 17.4955 5.67035 17.4955C5.09601 17.4955 4.54521 17.2674 4.1391 16.8612C3.73298 16.4551 3.50483 15.9043 3.50483 15.33C3.50483 14.7557 3.73298 14.2049 4.1391 13.7987L8.1116 9.81749C8.50151 9.42631 9.02686 9.19998 9.57898 9.18533C10.1311 9.17067 10.6677 9.3688 11.0778 9.73874L11.1828 9.82624C11.3488 9.98869 11.5724 10.0786 11.8046 10.0761C12.0368 10.0736 12.2585 9.97904 12.421 9.81312C12.5834 9.64719 12.6733 9.42353 12.6708 9.19133C12.6684 8.95914 12.5738 8.73744 12.4078 8.57499C12.3585 8.51114 12.3059 8.44981 12.2503 8.39124C11.5034 7.74139 10.5374 7.39973 9.54797 7.43547C8.55855 7.47122 7.6197 7.88169 6.9216 8.58374L2.8966 12.565C2.21266 13.3094 1.84276 14.2893 1.86416 15.3C1.88556 16.3107 2.29659 17.2741 3.01142 17.9889C3.72626 18.7037 4.68961 19.1148 5.70031 19.1362C6.71101 19.1576 7.6909 18.7877 8.43535 18.1037L9.9491 16.625C10.0986 16.4619 10.1807 16.2483 10.1791 16.0271C10.1774 15.8059 10.092 15.5936 9.94009 15.4328C9.78818 15.272 9.58102 15.1748 9.36028 15.1605C9.13954 15.1463 8.92161 15.2163 8.75035 15.3562ZM18.1041 2.89624C17.368 2.16475 16.3724 1.75418 15.3347 1.75418C14.297 1.75418 13.3014 2.16475 12.5653 2.89624L11.0516 4.37499C10.9021 4.53805 10.82 4.75166 10.8216 4.97285C10.8233 5.19404 10.9087 5.40639 11.0606 5.56717C11.2125 5.72795 11.4197 5.82523 11.6404 5.83944C11.8612 5.85364 12.0791 5.78372 12.2503 5.64374L13.7641 4.13874C14.1702 3.73263 14.721 3.50448 15.2953 3.50448C15.8697 3.50448 16.4205 3.73263 16.8266 4.13874C17.2327 4.54485 17.4609 5.09566 17.4609 5.66999C17.4609 6.24432 17.2327 6.79513 16.8266 7.20124L12.8541 11.1825C12.4642 11.5737 11.9388 11.8 11.3867 11.8147C10.8346 11.8293 10.298 11.6312 9.88785 11.2612L9.78285 11.1737C9.61692 11.0113 9.39326 10.9214 9.16107 10.9239C8.92887 10.9263 8.70717 11.0209 8.54472 11.1869C8.38228 11.3528 8.2924 11.5765 8.29486 11.8086C8.29732 12.0408 8.39192 12.2625 8.55785 12.425C8.6214 12.49 8.68859 12.5513 8.7591 12.6087C9.50694 13.2566 10.4725 13.597 11.4614 13.5613C12.4502 13.5256 13.3887 13.1164 14.0878 12.4162L18.0691 8.43499C18.8053 7.70356 19.2221 6.71057 19.2287 5.67283C19.2352 4.6351 18.831 3.63692 18.1041 2.89624Z"
                                    fill="#8B8B8C" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col space-y-6">
                    <h1 class="text-content-heading lg:text-section-header text-dark font-medium">{{ $article->title }}</h1>
                    <div class="w-full rounded-2xl max-h-[230px] lg:max-h-[440px] overflow-hidden">
                        <img class="w-full object-cover object-center" src="{{ $article->image }}" alt="">
                    </div>
                    <p class="text-mb-paragraph">{!! $article->body !!}</p>
                </div>
            </div>
            <div class="self-start w-full flex flex-col lg:w-1/4 mt-8 lg:mt-0 pl-0 items-center space-y-4 sticky top-4">
                <h4 class="text-content-heading text-center">Detail penulis</h4>
                <div class="w-[88px] h-[88px] rounded-full overflow-hidden">
                    <img class="w-full h-full object-cover object-center"
                        src="{{ $article->doctor->photo ? $article->doctor->photo : '/assets/images/default.jpg' }}"
                        alt="">
                </div>
                <div class="space-y-4">
                    <h6 class="text-center text-dark text-content-date leading-[16px] mx-auto">dr.
                        {{ $article->doctor->user->name }}</h6>
                    <div class="flex flex-row items-end justify-center space-x-2 text-dark-gray mx-auto">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 15H9V16C9 16.2652 9.10536 16.5196 9.29289 16.7071C9.48043 16.8946 9.73478 17 10 17C10.2652 17 10.5196 16.8946 10.7071 16.7071C10.8946 16.5196 11 16.2652 11 16V15H12C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14C13 13.7348 12.8946 13.4804 12.7071 13.2929C12.5196 13.1054 12.2652 13 12 13H11V12C11 11.7348 10.8946 11.4804 10.7071 11.2929C10.5196 11.1054 10.2652 11 10 11C9.73478 11 9.48043 11.1054 9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12V13H8C7.73478 13 7.48043 13.1054 7.29289 13.2929C7.10536 13.4804 7 13.7348 7 14C7 14.2652 7.10536 14.5196 7.29289 14.7071C7.48043 14.8946 7.73478 15 8 15V15ZM17 4H15V3C15 2.20435 14.6839 1.44129 14.1213 0.87868C13.5587 0.316071 12.7956 0 12 0H8C7.20435 0 6.44129 0.316071 5.87868 0.87868C5.31607 1.44129 5 2.20435 5 3V4H3C2.20435 4 1.44129 4.31607 0.87868 4.87868C0.316071 5.44129 0 6.20435 0 7V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V7C20 6.20435 19.6839 5.44129 19.1213 4.87868C18.5587 4.31607 17.7956 4 17 4ZM7 3C7 2.73478 7.10536 2.48043 7.29289 2.29289C7.48043 2.10536 7.73478 2 8 2H12C12.2652 2 12.5196 2.10536 12.7071 2.29289C12.8946 2.48043 13 2.73478 13 3V4H7V3ZM18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V10H18V17ZM18 8H2V7C2 6.73478 2.10536 6.48043 2.29289 6.29289C2.48043 6.10536 2.73478 6 3 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8946 6.48043 18 6.73478 18 7V8Z"
                                fill="#515559" />
                        </svg>
                        <p class="text-content-paragraph leading-none font-normal text-dark-gray">RSUD Dokter Juan Alma</p>
                    </div>
                    <div class="flex justify-center">
                        <div class="bg-primary-light px-3 py-1 rounded-xl">
                            <p class="text-sm text-light-gray"><span class="text-primary font-semibold">10 pasien</span>
                                telah
                                membuat janji</p>
                        </div>
                    </div>
                    <div class="flex flex-col mt-5">
                        <p class="text-content-paragraph font-medium text-dark">Biaya Konsultasi</p>
                        <p class="text-content-paragraph font-semibold text-secondary">Rp150.000</p>
                        <x-main-button-link class="text-center mt-2">Buat janji</x-main-button-link>
                    </div>
                </div>
            </div>
        </div>
        <x-footer-component></x-footer-component>
    </div>
@endsection


@section('scripts')
    @vite('resources/js/dropDownProfile.js')
    @vite('resources/js/navbar.js')
@endsection
