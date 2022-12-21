@extends('layouts.user', ['title' => 'Pesanan Saya'])

@section('content')
    <div>
        <x-navbar-user-component class="bg-white"></x-navbar-user-component>
        <div class="py-12">
            @foreach ($orders as $order)
            <div class="flex flex-col section-padding lg:flex-row py-4">
                <div class="space-y-3">
                    <h4>Pesanan #{{ $order->invoice_id }}</h4>
                    <div class="flex flex-col space-y-5 lg:flex-row justify-between lg:space-x-8">
                        <div class="flex flex-col lg:flex-row lg:min-w-[350px]">
                            <div class="w-full overflow-hidden md:h-[140px] md:w-[140px] rounded-md mb-3 mx-auto lg:mx-0">
                                <img class="w-full h-full object-cover object-center"
                                    src="{{ $order->provider->doctor->photo ? $order->provider->doctor->photo : '/assets/images/default.jpg' }}"
                                    alt="">
                            </div>
                            <div class="md:px-4 mb-3 space-y-2 md:space-y-3 md:py-3">
                                <h6 class="text-left text-dark text-content-date leading-[16px] mx-auto">dr.
                                    {{ $order->provider->name }}</h6>
                                <p class="text-light-gray">Dokter Gigi</p>
                                <div class="flex flex-row items-end justify-start space-x-2 text-dark-gray mx-auto">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 15H9V16C9 16.2652 9.10536 16.5196 9.29289 16.7071C9.48043 16.8946 9.73478 17 10 17C10.2652 17 10.5196 16.8946 10.7071 16.7071C10.8946 16.5196 11 16.2652 11 16V15H12C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14C13 13.7348 12.8946 13.4804 12.7071 13.2929C12.5196 13.1054 12.2652 13 12 13H11V12C11 11.7348 10.8946 11.4804 10.7071 11.2929C10.5196 11.1054 10.2652 11 10 11C9.73478 11 9.48043 11.1054 9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12V13H8C7.73478 13 7.48043 13.1054 7.29289 13.2929C7.10536 13.4804 7 13.7348 7 14C7 14.2652 7.10536 14.5196 7.29289 14.7071C7.48043 14.8946 7.73478 15 8 15V15ZM17 4H15V3C15 2.20435 14.6839 1.44129 14.1213 0.87868C13.5587 0.316071 12.7956 0 12 0H8C7.20435 0 6.44129 0.316071 5.87868 0.87868C5.31607 1.44129 5 2.20435 5 3V4H3C2.20435 4 1.44129 4.31607 0.87868 4.87868C0.316071 5.44129 0 6.20435 0 7V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V7C20 6.20435 19.6839 5.44129 19.1213 4.87868C18.5587 4.31607 17.7956 4 17 4ZM7 3C7 2.73478 7.10536 2.48043 7.29289 2.29289C7.48043 2.10536 7.73478 2 8 2H12C12.2652 2 12.5196 2.10536 12.7071 2.29289C12.8946 2.48043 13 2.73478 13 3V4H7V3ZM18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V10H18V17ZM18 8H2V7C2 6.73478 2.10536 6.48043 2.29289 6.29289C2.48043 6.10536 2.73478 6 3 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8946 6.48043 18 6.73478 18 7V8Z"
                                            fill="#515559" />
                                    </svg>
                                    <p class="text-md leading-none font-normal text-dark-gray">{{ $order->provider->clinic->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-start">
                            <div class="flex flex-row items-center space-x-2">
                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.96016 0C6.32578 0 5.80016 0.525625 5.80016 1.16V2.32H2.32016C2.01656 2.32 1.70844 2.43102 1.49094 2.65078C1.27117 2.86828 1.16016 3.17641 1.16016 3.48V26.68C1.16016 26.9836 1.27117 27.2917 1.49094 27.5115C1.70844 27.729 2.01656 27.84 2.32016 27.84H26.6802C26.9837 27.84 27.2919 27.729 27.5116 27.5115C27.7291 27.2917 27.8402 26.9836 27.8402 26.68V3.48C27.8402 3.17641 27.7291 2.86828 27.5116 2.65078C27.2919 2.43102 26.9837 2.32 26.6802 2.32H23.2002V1.16C23.2002 0.525625 22.6745 0 22.0402 0H20.8802C20.2458 0 19.7202 0.525625 19.7202 1.16V2.32H9.28016V1.16C9.28016 0.525625 8.75453 0 8.12016 0H6.96016ZM6.96016 1.16H8.12016V4.64H6.96016V1.16ZM20.8802 1.16H22.0402V4.64H20.8802V1.16ZM2.32016 3.48H5.80016V4.64C5.80016 5.27437 6.32578 5.8 6.96016 5.8H8.12016C8.75453 5.8 9.28016 5.27437 9.28016 4.64V3.48H19.7202V4.64C19.7202 5.27437 20.2458 5.8 20.8802 5.8H22.0402C22.6745 5.8 23.2002 5.27437 23.2002 4.64V3.48H26.6802V7.54H2.32016V3.48ZM2.32016 8.7H26.6802V26.68H2.32016V8.7ZM5.80016 11.02V24.36H23.2002V11.02H5.80016ZM6.96016 12.18H9.86016V15.08H6.96016V12.18ZM11.0202 12.18H13.9202V15.08H11.0202V12.18ZM15.0802 12.18H17.9802V15.08H15.0802V12.18ZM19.1402 12.18H22.0402V15.08H19.1402V12.18ZM6.96016 16.24H9.86016V19.14H6.96016V16.24ZM11.0202 16.24H13.9202V19.14H11.0202V16.24ZM15.0802 16.24H17.9802V19.14H15.0802V16.24ZM19.1402 16.24H22.0402V19.14H19.1402V16.24ZM6.96016 20.3H9.86016V23.2H6.96016V20.3ZM11.0202 20.3H13.9202V23.2H11.0202V20.3ZM15.0802 20.3H17.9802V23.2H15.0802V20.3ZM19.1402 20.3H22.0402V23.2H19.1402V20.3Z"
                                        fill="black" />
                                </svg>
                                <div>
                                    <span class="text-dark font-medium text-sm block">{{ date_to_date_indo($order->date) }}</span>
                                    <span class="text-dark font-medium text-sm block">{{ $order->hour }} WIB</span>
                                </div>
                            </div>
                            <div    
                                class="inline-flex mt-3 px-3 py-2 bg-[rgba(255,169,89,0.2)] rounded-lg items-center space-x-3 text-secondary">
                                <p class="flex text-light-gray font-normal text-sm">Pastikan datang 15 menit sebelum waktu
                                    yang ditentukan</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-start items-start lg:items-end space-y-3 relative">
                            @if ($order->status !== 'pending')
                                <p class="text-green-500 absolute text-sm -top-2">Sudah selesai</p>
                            @endif
                            <h4 class="text-content-heading text-secondary">{{ to_rupiah($order->cost) }}</h4>
                            <x-main-button-link href="{{ route('user.pesanan.cetak_invoice', $order) }}" class="px-12 mx-auto shadow-none w-full text-center">
                                Lihat invoice</x-main-button-link>
                        </div>
                    </div>
                    <hr class="text-gray-100">
                </div>
            </div>
            @endforeach
        </div>
        <x-footer-component></x-footer-component>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/dropDownProfile.js')
    @vite('resources/js/navbar.js')
@endsection
