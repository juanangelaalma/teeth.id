@extends('layouts.user', ['title' => 'Artikel'])

@section('content')
    <div>
        <x-navbar-user-component class="bg-white"></x-navbar-user-component>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

        <div x-data="{ open: false }">
            <div class="flex flex-col section-padding lg:flex-row py-12">
                <div class="w-full lg:w-4/6 lg:pr-10">
                    <div class="p-4 w-full border border-gray-100 flex-col">
                        <h6 class="font-bold text-content-date text-dark mb-3">Dokter</h6>
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
                                    <p class="text-content-paragraph leading-none font-normal text-dark-gray">{{ $user->clinic->name }}</p>
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
                        </div>

                        <h6 class="font-bold text-content-date text-dark mb-2 mt-3">Detail Layanan</h6>
                        <div class="flex justify-start space-x-3">
                            <div class="flex flex-row items-center space-x-2">
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.87449 2.04771C6.93812 2.04771 5.36277 3.62306 5.36277 5.55943V8.74465C4.86157 8.75284 4.45611 9.1625 4.45611 9.66562V10.8348C4.45611 11.8129 5.11997 12.6569 6.07053 12.8874L6.38876 12.9646C6.55507 14.2001 7.20461 15.2838 8.14083 16.0196C8.11832 16.111 8.12629 16.0395 8.12629 17.529C4.68289 17.7117 1.9375 20.5706 1.9375 24.0588V27.5596C1.9375 28.2941 2.53505 28.8916 3.26953 28.8916H8.92451C9.19204 28.8916 9.40889 28.6748 9.40889 28.4072V24.0415C9.40889 23.2729 9.70379 22.5279 10.2181 21.9974L13.6169 18.4921C13.9451 18.5038 14.2662 18.5442 14.5777 18.6106V20.9405C13.4398 21.1443 12.5732 22.1407 12.5732 23.3364V24.4626C12.5732 24.9696 12.9857 25.3821 13.4927 25.3821H14.1172C14.3848 25.3821 14.6016 25.1653 14.6016 24.8978C14.6016 24.6302 14.3848 24.4134 14.1172 24.4134H13.5419V23.3364C13.5419 22.528 14.1996 21.8704 15.0081 21.8704C16.0185 21.8704 16.5823 22.6109 16.5823 23.356V24.4134H16.1802C15.9127 24.4134 15.6958 24.6302 15.6958 24.8978C15.6958 25.1653 15.9127 25.3821 16.1802 25.3821H16.7191C17.1779 25.3821 17.551 25.0089 17.551 24.5501V23.356C17.551 22.1563 16.6856 21.1556 15.5465 20.9437V18.9125C17.5636 19.7509 18.9858 21.7418 18.9858 24.0588V27.5597C18.9858 27.76 18.8229 27.923 18.6225 27.923H13.9765C13.709 27.923 13.4921 28.1398 13.4921 28.4074C13.4921 28.6749 13.709 28.8917 13.9765 28.8917H18.6225C19.357 28.8917 19.9546 28.2942 19.9546 27.5597V24.0588C19.9546 20.6084 17.2727 17.7858 13.8999 17.5377C13.8999 16.0222 13.9073 16.0951 13.881 16.0028C14.795 15.2567 15.4119 14.1607 15.5264 12.921C16.7126 12.6334 17.2792 11.7593 17.2792 10.8348V9.66562C17.2792 9.21619 16.9556 8.84144 16.5293 8.76061V5.55943C16.5293 3.62306 14.954 2.04771 13.0176 2.04771H8.87449ZM20.3179 2.04783C19.5834 2.04783 18.9858 2.64538 18.9858 3.37986V17.5456C18.9858 18.2801 19.5834 18.8776 20.3179 18.8776H27.7305C28.465 18.8776 29.0625 18.2801 29.0625 17.5456V3.37986C29.0625 2.64538 28.465 2.04783 27.7305 2.04783H20.3179ZM8.87449 3.01658H13.0176C14.4198 3.01658 15.5605 4.15736 15.5605 5.55955V8.74252H6.33152V5.55955C6.33152 4.15736 7.47231 3.01658 8.87449 3.01658ZM20.3179 3.01658H27.7305C27.9308 3.01658 28.0938 3.17954 28.0938 3.37986V14.847H19.9546V3.37986C19.9546 3.17954 20.1175 3.01658 20.3179 3.01658ZM10.946 4.1788C10.6785 4.1788 10.4616 4.39565 10.4616 4.66317V5.39518H9.72972C9.46219 5.39518 9.24534 5.61203 9.24534 5.87955C9.24534 6.14707 9.46219 6.36393 9.72972 6.36393H10.4616V7.09593C10.4616 7.36345 10.6785 7.5803 10.946 7.5803C11.2135 7.5803 11.4304 7.36345 11.4304 7.09593V6.36393H12.1624C12.4299 6.36393 12.6467 6.14707 12.6467 5.87955C12.6467 5.61203 12.4299 5.39518 12.1624 5.39518H11.4304V4.66317C11.4304 4.39565 11.2135 4.1788 10.946 4.1788ZM22.4196 6.30988C21.6851 6.30988 21.0876 6.90743 21.0876 7.64191V9.39127C21.0876 10.0702 21.5982 10.6321 22.2555 10.7132V11.6596C22.2555 11.8458 22.362 12.0153 22.5297 12.096C22.6974 12.1767 22.8966 12.1543 23.042 12.0382L24.6891 10.7233H25.6286C26.3631 10.7233 26.9606 10.1258 26.9606 9.39127V7.64191C26.9606 6.90743 26.3631 6.30988 25.6286 6.30988H22.4196ZM22.4196 7.27863H25.6286C25.8289 7.27863 25.9919 7.44159 25.9919 7.64191V9.39127C25.9919 9.59159 25.8289 9.75455 25.6286 9.75455H24.5195C24.4096 9.75455 24.303 9.79186 24.2172 9.86039L23.2242 10.6532V10.2389C23.2242 9.9714 23.0074 9.75455 22.7398 9.75455H22.4196C22.2193 9.75455 22.0563 9.59159 22.0563 9.39127V7.64191C22.0563 7.44159 22.2193 7.27863 22.4196 7.27863ZM7.31435 9.71127H14.5777V12.5023C14.5777 14.4593 12.9857 16.0514 11.0288 16.0514C8.9806 16.0514 7.31435 14.3851 7.31435 12.337V9.71127ZM5.42486 9.71269H6.3456V11.9573C5.74769 11.8124 5.42486 11.3423 5.42486 10.8348V9.71269ZM15.5465 9.71269H16.3104V10.8348C16.3104 11.3255 16.0013 11.7535 15.5465 11.9128V9.71269ZM12.0538 12.8621C11.9758 12.8591 11.8959 12.8751 11.8209 12.9122C11.155 13.2419 10.5198 13.3052 9.86666 12.9508C9.63162 12.8231 9.33749 12.9104 9.20987 13.1455C9.08227 13.3807 9.16951 13.6746 9.40463 13.8022C10.2357 14.2532 11.1915 14.3046 12.2507 13.7803C12.4905 13.6617 12.5886 13.3711 12.4699 13.1313C12.3883 12.9665 12.2255 12.8686 12.0538 12.8621ZM19.9546 15.8157H28.0938V17.5456C28.0938 17.7459 27.9308 17.9089 27.7305 17.9089H20.3179C20.1175 17.9089 19.9546 17.7459 19.9546 17.5456V15.8157ZM24.0241 16.2352C23.7034 16.2352 23.4424 16.4962 23.4424 16.8169C23.4424 17.1376 23.7034 17.3986 24.0241 17.3986C24.3448 17.3986 24.6058 17.1376 24.6058 16.8169C24.6058 16.4962 24.3448 16.2352 24.0241 16.2352ZM12.9311 16.5987C12.9311 17.7588 12.9273 17.7259 12.9381 17.7914L11.004 19.6559L9.06311 17.8837C9.1068 17.7686 9.09504 17.8195 9.09504 16.6006C9.68498 16.8692 10.3394 17.0202 11.0288 17.0202C11.7082 17.0202 12.3525 16.8685 12.9311 16.5987ZM8.29197 18.4914L10.4011 20.4171L9.52265 21.3231C8.8347 22.0327 8.44014 23.0236 8.44014 24.0416V27.923H3.26953C3.06921 27.923 2.90625 27.76 2.90625 27.5597V24.0588C2.90625 22.0856 3.93742 20.3487 5.48919 19.3589V22.5842C4.879 22.7876 4.43766 23.3638 4.43766 24.0415C4.43766 24.8884 5.12668 25.5774 5.97356 25.5774C6.82045 25.5774 7.50947 24.8884 7.50947 24.0415C7.50947 23.3638 7.06815 22.7876 6.45794 22.5842V18.867C7.02978 18.6439 7.64713 18.5125 8.29197 18.4914ZM5.97356 23.4743C6.28632 23.4743 6.54084 23.7288 6.54084 24.0415C6.54084 24.3542 6.28632 24.6086 5.97356 24.6086C5.66084 24.6086 5.40641 24.3542 5.40641 24.0415C5.40641 23.7288 5.66084 23.4743 5.97356 23.4743ZM10.5645 27.8624C10.42 27.8624 10.2814 27.9199 10.1792 28.022C10.077 28.1242 10.0196 28.2628 10.0196 28.4074C10.0196 28.5519 10.077 28.6905 10.1792 28.7927C10.2814 28.8949 10.42 28.9523 10.5645 28.9523C10.709 28.9523 10.8476 28.8949 10.9498 28.7927C11.052 28.6905 11.1094 28.5519 11.1094 28.4074C11.1094 28.2628 11.052 28.1242 10.9498 28.022C10.8476 27.9199 10.709 27.8624 10.5645 27.8624ZM12.2598 27.8624C12.1153 27.8624 11.9767 27.9199 11.8745 28.022C11.7723 28.1242 11.7149 28.2628 11.7149 28.4074C11.7149 28.5519 11.7723 28.6905 11.8745 28.7927C11.9767 28.8949 12.1153 28.9523 12.2598 28.9523C12.4043 28.9523 12.5429 28.8949 12.6451 28.7927C12.7473 28.6905 12.8047 28.5519 12.8047 28.4074C12.8047 28.2628 12.7473 28.1242 12.6451 28.022C12.5429 27.9199 12.4043 27.8624 12.2598 27.8624Z"
                                        fill="black" />
                                </svg>
                                <span class="text-dark font-medium text-sm">Janji Dokter</span>
                            </div>
                            <div class="flex flex-row items-center space-x-2">
                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.96016 0C6.32578 0 5.80016 0.525625 5.80016 1.16V2.32H2.32016C2.01656 2.32 1.70844 2.43102 1.49094 2.65078C1.27117 2.86828 1.16016 3.17641 1.16016 3.48V26.68C1.16016 26.9836 1.27117 27.2917 1.49094 27.5115C1.70844 27.729 2.01656 27.84 2.32016 27.84H26.6802C26.9837 27.84 27.2919 27.729 27.5116 27.5115C27.7291 27.2917 27.8402 26.9836 27.8402 26.68V3.48C27.8402 3.17641 27.7291 2.86828 27.5116 2.65078C27.2919 2.43102 26.9837 2.32 26.6802 2.32H23.2002V1.16C23.2002 0.525625 22.6745 0 22.0402 0H20.8802C20.2458 0 19.7202 0.525625 19.7202 1.16V2.32H9.28016V1.16C9.28016 0.525625 8.75453 0 8.12016 0H6.96016ZM6.96016 1.16H8.12016V4.64H6.96016V1.16ZM20.8802 1.16H22.0402V4.64H20.8802V1.16ZM2.32016 3.48H5.80016V4.64C5.80016 5.27437 6.32578 5.8 6.96016 5.8H8.12016C8.75453 5.8 9.28016 5.27437 9.28016 4.64V3.48H19.7202V4.64C19.7202 5.27437 20.2458 5.8 20.8802 5.8H22.0402C22.6745 5.8 23.2002 5.27437 23.2002 4.64V3.48H26.6802V7.54H2.32016V3.48ZM2.32016 8.7H26.6802V26.68H2.32016V8.7ZM5.80016 11.02V24.36H23.2002V11.02H5.80016ZM6.96016 12.18H9.86016V15.08H6.96016V12.18ZM11.0202 12.18H13.9202V15.08H11.0202V12.18ZM15.0802 12.18H17.9802V15.08H15.0802V12.18ZM19.1402 12.18H22.0402V15.08H19.1402V12.18ZM6.96016 16.24H9.86016V19.14H6.96016V16.24ZM11.0202 16.24H13.9202V19.14H11.0202V16.24ZM15.0802 16.24H17.9802V19.14H15.0802V16.24ZM19.1402 16.24H22.0402V19.14H19.1402V16.24ZM6.96016 20.3H9.86016V23.2H6.96016V20.3ZM11.0202 20.3H13.9202V23.2H11.0202V20.3ZM15.0802 20.3H17.9802V23.2H15.0802V20.3ZM19.1402 20.3H22.0402V23.2H19.1402V20.3Z"
                                        fill="black" />
                                </svg>
                                <div>
                                    <span class="text-dark font-medium text-sm block">{{ day_english_to_indo($day) }}, {{ date_to_date_indo($selectedDate) }}</span>
                                    <span class="text-dark font-medium text-sm block">{{ $hour }} WIB</span>
                                </div>
                            </div>
                        </div>

                        <h6 class="font-bold text-content-date text-dark mt-3 mb-2">Catatan</h6>
                        <div class="inline-flex px-3 py-2 bg-primary-light rounded-lg space-x-3">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.4523 0.484375C12.4308 0.488282 12.4093 0.494141 12.3898 0.5C12.1574 0.552735 11.9933 0.761719 11.9992 1V3C11.9972 3.17969 12.091 3.34766 12.2472 3.43945C12.4035 3.5293 12.5949 3.5293 12.7511 3.43945C12.9074 3.34766 13.0011 3.17969 12.9992 3V1C13.005 0.855469 12.9464 0.716797 12.8429 0.619141C12.7374 0.519532 12.5949 0.470703 12.4523 0.484375ZM5.01478 3.5625C4.99916 3.56641 4.98353 3.57227 4.96791 3.57813C4.78822 3.61523 4.64369 3.75 4.59095 3.92578C4.53822 4.10156 4.58705 4.29297 4.71791 4.42188L6.13978 5.84375C6.26088 5.99219 6.45424 6.06055 6.64174 6.01758C6.82728 5.97461 6.97377 5.82813 7.01674 5.64258C7.0597 5.45508 6.99134 5.26172 6.84291 5.14063L5.42103 3.71875C5.32728 3.61914 5.19838 3.56445 5.06166 3.5625C5.04603 3.5625 5.03041 3.5625 5.01478 3.5625ZM19.8742 3.5625C19.8527 3.56641 19.8312 3.57227 19.8117 3.57813C19.7218 3.60156 19.6417 3.65039 19.5773 3.71875L18.1554 5.14063C18.007 5.26172 17.9386 5.45508 17.9816 5.64258C18.0245 5.82813 18.171 5.97461 18.3566 6.01758C18.5441 6.06055 18.7374 5.99219 18.8585 5.84375L20.2804 4.42188C20.4367 4.27344 20.4816 4.04102 20.3898 3.8457C20.296 3.64844 20.089 3.53516 19.8742 3.5625ZM12.4992 4.5C8.63978 4.5 5.49916 7.64062 5.49916 11.5C5.49916 13.9453 6.59486 15.5879 7.62416 16.7969C8.13978 17.4004 8.63783 17.9121 8.98353 18.3594C9.32924 18.8066 9.49916 19.1641 9.49916 19.5V21.2656C9.43275 21.4043 9.43275 21.5645 9.49916 21.7031V22C9.49916 22.8223 10.1769 23.5 10.9992 23.5H11.3898C11.6652 23.8047 12.0578 24 12.4992 24C12.9406 24 13.3331 23.8047 13.6085 23.5H13.9992C14.8214 23.5 15.4992 22.8223 15.4992 22V21.5938C15.5128 21.5273 15.5128 21.457 15.4992 21.3906V19.5C15.4992 19.1641 15.6691 18.8027 16.0148 18.3594C16.3605 17.916 16.8585 17.4141 17.3742 16.8125C18.4035 15.6094 19.4992 13.9668 19.4992 11.5C19.4992 7.64062 16.3585 4.5 12.4992 4.5ZM12.4992 5.5C15.8195 5.5 18.4992 8.17969 18.4992 11.5C18.4992 13.6797 17.5949 15.0391 16.6242 16.1719C16.1398 16.7383 15.6378 17.2324 15.2335 17.75C14.9367 18.1309 14.7238 18.5469 14.6085 19H10.3898C10.2745 18.5469 10.0617 18.1328 9.76478 17.75C9.36049 17.2285 8.85853 16.7266 8.37416 16.1562C7.40345 15.0176 6.49916 13.6562 6.49916 11.5C6.49916 8.17969 9.17885 5.5 12.4992 5.5ZM1.85853 11C1.58314 11.0391 1.38978 11.2949 1.42885 11.5703C1.46791 11.8457 1.72377 12.0391 1.99916 12H3.99916C4.17885 12.002 4.34681 11.9082 4.43861 11.752C4.52845 11.5957 4.52845 11.4043 4.43861 11.248C4.34681 11.0918 4.17885 10.998 3.99916 11H1.99916C1.98353 11 1.96791 11 1.95228 11C1.93666 11 1.92103 11 1.90541 11C1.88978 11 1.87416 11 1.85853 11ZM20.8585 11C20.5831 11.0391 20.3898 11.2949 20.4288 11.5703C20.4679 11.8457 20.7238 12.0391 20.9992 12H22.9992C23.1788 12.002 23.3468 11.9082 23.4386 11.752C23.5285 11.5957 23.5285 11.4043 23.4386 11.248C23.3468 11.0918 23.1788 10.998 22.9992 11H20.9992C20.9835 11 20.9679 11 20.9523 11C20.9367 11 20.921 11 20.9054 11C20.8898 11 20.8742 11 20.8585 11ZM6.43666 17C6.32338 17.0156 6.21791 17.0723 6.13978 17.1562L4.71791 18.5781C4.56947 18.6992 4.50111 18.8926 4.54408 19.0801C4.58705 19.2656 4.73353 19.4121 4.91908 19.4551C5.10658 19.498 5.29994 19.4297 5.42103 19.2812L6.84291 17.8594C6.99134 17.7168 7.03627 17.4961 6.95619 17.3066C6.87806 17.1172 6.68861 16.9961 6.48353 17C6.46791 17 6.45228 17 6.43666 17ZM18.4054 17C18.2179 17.0332 18.0675 17.1699 18.0148 17.3516C17.962 17.5352 18.0167 17.7305 18.1554 17.8594L19.5773 19.2812C19.6984 19.4297 19.8917 19.498 20.0792 19.4551C20.2648 19.4121 20.4113 19.2656 20.4542 19.0801C20.4972 18.8926 20.4288 18.6992 20.2804 18.5781L18.8585 17.1562C18.7648 17.0566 18.6359 17.002 18.4992 17C18.4835 17 18.4679 17 18.4523 17C18.4367 17 18.421 17 18.4054 17ZM10.4992 20H14.4992V21H11.9992C11.9835 21 11.9679 21 11.9523 21C11.9367 21 11.921 21 11.9054 21C11.63 21.0254 11.4269 21.2715 11.4523 21.5469C11.4777 21.8223 11.7238 22.0254 11.9992 22H14.4992C14.4992 22.2832 14.2824 22.5 13.9992 22.5H10.9992C10.716 22.5 10.4992 22.2832 10.4992 22C10.6788 22.002 10.8468 21.9082 10.9386 21.752C11.0285 21.5957 11.0285 21.4043 10.9386 21.248C10.8468 21.0918 10.6788 20.998 10.4992 21V20Z"
                                    fill="#0061FF" />
                            </svg>
                            <p class="flex-1 text-light-gray font-normal text-sm">Silakan datang 15-30 menit sebelum jadwal
                                untuk daftar ulang, Tunjukan halaman transaksi Anda ke bagian pendaftaran</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-2/6">
                    <div class="w-full p-4 border border-gray-100 rounded-lg">
                        <h6 class="font-bold text-content-date text-dark mt-3">Ringkasan tagihan</h6>
                        <hr class="text-gray-100 w-full my-6">
                        <div class="flex justify-between mb-4">
                            <span>Biaya konsultasi</span>
                            <span>{{ to_rupiah($user->clinic->price) }}</span>
                        </div>
                        <div class="flex justify-between items-center mb-20">
                            <span>Total pembayaran</span>
                            <span class="text-secondary text-[25px] font-semibold">{{ to_rupiah($user->clinic->price) }}</span>
                        </div>
                        <div class="my-6 flex justify-center items-center">
                            <x-main-button-link @click="open = true" class="px-12 mx-auto shadow-none w-full text-center">
                                Metode Pembayaran</x-main-button-link>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal Metode Pembayaran --}}
            <template x-if="true">
                <form action="{{ route('buat_janji.bayar_pesanan') }}" method="POST">
                    @csrf
                    <div x-show="open"
                    class="font-sans antialiased fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center">
                    <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        class="fixed inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <input type="hidden" value="{{ $user->id }}" name="user_id">
                    <input type="hidden" value="{{ $selectedDate }}" name="date">
                    <input type="hidden" value="{{ $hour }}" name="hour">

                    <div x-show="open" x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-left sm:mt-0 sm:ml-4">
                                    <div class="flex justify-between">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            Pembayaran
                                        </h3>
                                        <button @click="open = false">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.4099 12L19.7099 5.71C19.8982 5.5217 20.004 5.2663 20.004 5C20.004 4.7337 19.8982 4.47831 19.7099 4.29C19.5216 4.1017 19.2662 3.99591 18.9999 3.99591C18.7336 3.99591 18.4782 4.1017 18.2899 4.29L11.9999 10.59L5.70994 4.29C5.52164 4.1017 5.26624 3.99591 4.99994 3.99591C4.73364 3.99591 4.47824 4.1017 4.28994 4.29C4.10164 4.47831 3.99585 4.7337 3.99585 5C3.99585 5.2663 4.10164 5.5217 4.28994 5.71L10.5899 12L4.28994 18.29C4.19621 18.383 4.12182 18.4936 4.07105 18.6154C4.02028 18.7373 3.99414 18.868 3.99414 19C3.99414 19.132 4.02028 19.2627 4.07105 19.3846C4.12182 19.5064 4.19621 19.617 4.28994 19.71C4.3829 19.8037 4.4935 19.8781 4.61536 19.9289C4.73722 19.9797 4.86793 20.0058 4.99994 20.0058C5.13195 20.0058 5.26266 19.9797 5.38452 19.9289C5.50638 19.8781 5.61698 19.8037 5.70994 19.71L11.9999 13.41L18.2899 19.71C18.3829 19.8037 18.4935 19.8781 18.6154 19.9289C18.7372 19.9797 18.8679 20.0058 18.9999 20.0058C19.132 20.0058 19.2627 19.9797 19.3845 19.9289C19.5064 19.8781 19.617 19.8037 19.7099 19.71C19.8037 19.617 19.8781 19.5064 19.9288 19.3846C19.9796 19.2627 20.0057 19.132 20.0057 19C20.0057 18.868 19.9796 18.7373 19.9288 18.6154C19.8781 18.4936 19.8037 18.383 19.7099 18.29L13.4099 12Z"
                                                    fill="#515559" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div
                                        class="inline-flex mt-3 px-3 py-2 bg-[rgba(255,169,89,0.2)] rounded-lg space-x-3 text-secondary">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.4523 0.484375C12.4308 0.488282 12.4093 0.494141 12.3898 0.5C12.1574 0.552735 11.9933 0.761719 11.9992 1V3C11.9972 3.17969 12.091 3.34766 12.2472 3.43945C12.4035 3.5293 12.5949 3.5293 12.7511 3.43945C12.9074 3.34766 13.0011 3.17969 12.9992 3V1C13.005 0.855469 12.9464 0.716797 12.8429 0.619141C12.7374 0.519532 12.5949 0.470703 12.4523 0.484375ZM5.01478 3.5625C4.99916 3.56641 4.98353 3.57227 4.96791 3.57813C4.78822 3.61523 4.64369 3.75 4.59095 3.92578C4.53822 4.10156 4.58705 4.29297 4.71791 4.42188L6.13978 5.84375C6.26088 5.99219 6.45424 6.06055 6.64174 6.01758C6.82728 5.97461 6.97377 5.82813 7.01674 5.64258C7.0597 5.45508 6.99134 5.26172 6.84291 5.14063L5.42103 3.71875C5.32728 3.61914 5.19838 3.56445 5.06166 3.5625C5.04603 3.5625 5.03041 3.5625 5.01478 3.5625ZM19.8742 3.5625C19.8527 3.56641 19.8312 3.57227 19.8117 3.57813C19.7218 3.60156 19.6417 3.65039 19.5773 3.71875L18.1554 5.14063C18.007 5.26172 17.9386 5.45508 17.9816 5.64258C18.0245 5.82813 18.171 5.97461 18.3566 6.01758C18.5441 6.06055 18.7374 5.99219 18.8585 5.84375L20.2804 4.42188C20.4367 4.27344 20.4816 4.04102 20.3898 3.8457C20.296 3.64844 20.089 3.53516 19.8742 3.5625ZM12.4992 4.5C8.63978 4.5 5.49916 7.64062 5.49916 11.5C5.49916 13.9453 6.59486 15.5879 7.62416 16.7969C8.13978 17.4004 8.63783 17.9121 8.98353 18.3594C9.32924 18.8066 9.49916 19.1641 9.49916 19.5V21.2656C9.43275 21.4043 9.43275 21.5645 9.49916 21.7031V22C9.49916 22.8223 10.1769 23.5 10.9992 23.5H11.3898C11.6652 23.8047 12.0578 24 12.4992 24C12.9406 24 13.3331 23.8047 13.6085 23.5H13.9992C14.8214 23.5 15.4992 22.8223 15.4992 22V21.5938C15.5128 21.5273 15.5128 21.457 15.4992 21.3906V19.5C15.4992 19.1641 15.6691 18.8027 16.0148 18.3594C16.3605 17.916 16.8585 17.4141 17.3742 16.8125C18.4035 15.6094 19.4992 13.9668 19.4992 11.5C19.4992 7.64062 16.3585 4.5 12.4992 4.5ZM12.4992 5.5C15.8195 5.5 18.4992 8.17969 18.4992 11.5C18.4992 13.6797 17.5949 15.0391 16.6242 16.1719C16.1398 16.7383 15.6378 17.2324 15.2335 17.75C14.9367 18.1309 14.7238 18.5469 14.6085 19H10.3898C10.2745 18.5469 10.0617 18.1328 9.76478 17.75C9.36049 17.2285 8.85853 16.7266 8.37416 16.1562C7.40345 15.0176 6.49916 13.6562 6.49916 11.5C6.49916 8.17969 9.17885 5.5 12.4992 5.5ZM1.85853 11C1.58314 11.0391 1.38978 11.2949 1.42885 11.5703C1.46791 11.8457 1.72377 12.0391 1.99916 12H3.99916C4.17885 12.002 4.34681 11.9082 4.43861 11.752C4.52845 11.5957 4.52845 11.4043 4.43861 11.248C4.34681 11.0918 4.17885 10.998 3.99916 11H1.99916C1.98353 11 1.96791 11 1.95228 11C1.93666 11 1.92103 11 1.90541 11C1.88978 11 1.87416 11 1.85853 11ZM20.8585 11C20.5831 11.0391 20.3898 11.2949 20.4288 11.5703C20.4679 11.8457 20.7238 12.0391 20.9992 12H22.9992C23.1788 12.002 23.3468 11.9082 23.4386 11.752C23.5285 11.5957 23.5285 11.4043 23.4386 11.248C23.3468 11.0918 23.1788 10.998 22.9992 11H20.9992C20.9835 11 20.9679 11 20.9523 11C20.9367 11 20.921 11 20.9054 11C20.8898 11 20.8742 11 20.8585 11ZM6.43666 17C6.32338 17.0156 6.21791 17.0723 6.13978 17.1562L4.71791 18.5781C4.56947 18.6992 4.50111 18.8926 4.54408 19.0801C4.58705 19.2656 4.73353 19.4121 4.91908 19.4551C5.10658 19.498 5.29994 19.4297 5.42103 19.2812L6.84291 17.8594C6.99134 17.7168 7.03627 17.4961 6.95619 17.3066C6.87806 17.1172 6.68861 16.9961 6.48353 17C6.46791 17 6.45228 17 6.43666 17ZM18.4054 17C18.2179 17.0332 18.0675 17.1699 18.0148 17.3516C17.962 17.5352 18.0167 17.7305 18.1554 17.8594L19.5773 19.2812C19.6984 19.4297 19.8917 19.498 20.0792 19.4551C20.2648 19.4121 20.4113 19.2656 20.4542 19.0801C20.4972 18.8926 20.4288 18.6992 20.2804 18.5781L18.8585 17.1562C18.7648 17.0566 18.6359 17.002 18.4992 17C18.4835 17 18.4679 17 18.4523 17C18.4367 17 18.421 17 18.4054 17ZM10.4992 20H14.4992V21H11.9992C11.9835 21 11.9679 21 11.9523 21C11.9367 21 11.921 21 11.9054 21C11.63 21.0254 11.4269 21.2715 11.4523 21.5469C11.4777 21.8223 11.7238 22.0254 11.9992 22H14.4992C14.4992 22.2832 14.2824 22.5 13.9992 22.5H10.9992C10.716 22.5 10.4992 22.2832 10.4992 22C10.6788 22.002 10.8468 21.9082 10.9386 21.752C11.0285 21.5957 11.0285 21.4043 10.9386 21.248C10.8468 21.0918 10.6788 20.998 10.4992 21V20Z"
                                                fill="currentColor" />
                                        </svg>
                                        <p class="flex-1 text-light-gray font-normal text-sm">Yuk selesaikan pembayaranmu,
                                            pastikan pesananmu sudah sesuai ya...</p>
                                    </div>
                                    <h3 class="text-lg mt-4 leading-6 font-medium text-gray-900">
                                        Metode Pembayaran
                                    </h3>
                                    <div class="flex justify-start items-center space-x-3 mt-2">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M34.25 2.09375L33.6875 2.9375L24.8125 15.7188L17 18.0312L16.9688 18.0625H16.9375C15.9492 18.4336 15.1836 19.082 14.5938 19.9062L14.5625 19.9375V19.9688L7.8125 30.375L7.5625 29.5625L1 31.5312L0.0625 31.8438L0.34375 32.7812L4.84375 47.875L5.125 48.8438L6.09375 48.5625L11.6875 46.8438L12.6562 46.5625L12.3438 45.625L11.7812 43.7188L19.625 41.9688C22.0352 41.4219 24.2305 40.1211 25.7812 38.125L26.1562 37.6562L29.9375 40.3125L30.75 40.9062L31.3125 40.0625L49.4375 13.875L50 13.0625L49.1562 12.4688L35.0625 2.6875L34.25 2.09375ZM34.75 4.875L47.2188 13.5625L40.0625 23.9062C40.9805 20.9805 39.5742 17.4766 36.5938 15.4062C36.5859 15.4023 36.6016 15.3789 36.5938 15.375C36.5859 15.3672 36.5703 15.3828 36.5625 15.375C34.8242 14.1484 32.7578 13.6367 30.875 13.8125C29.7969 13.9141 28.7852 14.2578 27.9062 14.8125L34.75 4.875ZM38.9375 10.8125C38.3906 10.8086 37.8633 11.0781 37.5312 11.5625C37 12.3359 37.1953 13.375 37.9688 13.9062C38.7422 14.4375 39.8125 14.2422 40.3438 13.4688C40.875 12.6953 40.6797 11.6562 39.9062 11.125C39.6172 10.9258 39.2656 10.8164 38.9375 10.8125ZM31.125 15.7812C32.5078 15.6562 34.0508 16.0352 35.4062 17L35.4375 17.0312C38.2695 18.9805 39.1133 22.2852 37.6875 24.3438H37.6562C36.9375 25.4531 35.7383 26.0547 34.25 26.125C34.3008 24.9805 33.8945 23.8398 33 23C32.9922 22.9922 32.9766 23.0078 32.9688 23C31.6055 21.6523 29.4805 21.4258 27.9062 22.4688C26.9531 20.7539 26.8828 18.8906 27.8125 17.5625C28.5234 16.5352 29.7422 15.9062 31.125 15.7812ZM23.0312 18.3438L18.25 25.875L17.7188 26.75L18.5938 27.25L21.7812 29.1562L22.375 29.5312L22.9375 29.0625L28 24.9688C28.2578 24.8867 28.4688 24.707 28.5938 24.4688L28.8438 24.2812C29.6406 23.6172 30.8594 23.6719 31.5938 24.4062V24.4375H31.625C32.4453 25.1875 32.5195 26.3594 31.8125 27.2812L24.2188 36.875C22.9688 38.4805 21.1797 39.5781 19.1875 40.0312L11.2188 41.8125L8.40625 32.375L8.71875 32.25L9.0625 32.125L9.25 31.8438L16.2188 21.0938C16.6133 20.5391 17.0195 20.1992 17.5938 19.9688C17.6172 19.9609 17.6328 19.9453 17.6562 19.9375L23.0312 18.3438ZM25.3125 18.4688C24.9258 20.207 25.3164 22.0938 26.3125 23.75L22.2188 27.0938L20.5 26.0625L25.3125 18.4688ZM38.0625 26.8125L30.25 38.125L27.375 36.0938L33.375 28.5312V28.5H33.4062C33.5 28.3789 33.5781 28.2539 33.6562 28.125C35.2812 28.1719 36.8477 27.7539 38.0625 26.8125ZM6.21875 32.0312L10.1562 45.25L6.46875 46.375L2.53125 33.1875L6.21875 32.0312Z"
                                                fill="#0061FF" />
                                        </svg>
                                        <h6 class="font-light text-primary">Pembarayan langsung</h6>
                                    </div>
                                    <hr class="w-full bg-primary-light h-[10px] border-none my-4">
                                    <h3 class="text-lg mt-4 leading-6 font-medium text-gray-900">
                                        Ringkasan Pemesanan
                                    </h3>
                                    <div class="flex flex-row justify-between font-light mt-2">
                                        <span>Total pesanan</span>
                                        <span>{{ to_rupiah($user->clinic->price) }}</span>
                                    </div>
                                    <div class="flex flex-row justify-between font-light mt-1">
                                        <span>Biaya layanan</span>
                                        <span>Rp0</span>
                                    </div>
                                    <hr class="w-full border-gray-100 my-4">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row justify-between space-y-3 md:space-y-0">
                            <div>
                                <span>Total Pembayaran</span>
                                <h4 class="text-content-heading text-secondary">{{ to_rupiah($user->clinic->price) }}</h4>
                            </div>
                            <div class="flex justify-end items-center">
                                <x-main-button type="submit" @click="open = true"
                                    class="px-12 mx-auto shadow-none w-full text-center">
                                    Bayar</x-main-button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </template>
        </div>

        <x-footer-component></x-footer-component>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/dropDownProfile.js')
    @vite('resources/js/navbar.js')
@endsection
