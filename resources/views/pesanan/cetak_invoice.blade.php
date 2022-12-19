@extends('layouts.user', ['title' => 'Artikel'])

@section('content')
    <div>
        <x-navbar-user-component class="bg-white"></x-navbar-user-component>
        <div class="section-padding lg:flex-row py-12">
            <div class="flex flex-col lg:w-[793px] mx-auto">
                <div class="flex w-full flex-row justify-between">
                    <div class="flex flex-col items-start">
                        <h4 class="font-semibold text-primary">Teeth.id</h4>
                        <h6 class="font-semibold text-dark text-paragraph text-[15px] lg:text-paragraph">Ketintang</h6>
                        <p class="text-[15px] lg:text-paragraph">Jl Raya Ketintang No. 78 </p>
                        <p class="text-[15px] lg:text-paragraph">Surabaya, Jawa Timur 66261</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <h1 class="text-dark text-section-header font-bold lg:text-[50px]">INVOICE</h1>
                        <p>Pesanan #128403840</p>
                    </div>
                </div>
                <hr class="w-full border-dark my-4">
                <div class="flex flex-wrap">
                  <div class="w-1/2 lg:w-1/3 my-3">
                    <h6 class="font-semibold">Nama Pasien:</h6>
                    <p class="text-normal">Juan Angela Alma</p>
                  </div>
                  <div class="w-1/2 lg:w-1/3 my-3">
                    <h6 class="font-semibold">Nama Dokter:</h6>
                    <p class="text-normal">Juan Angela Alma</p>
                  </div>
                  <div class="w-1/2 lg:w-1/3 my-3">
                    <h6 class="font-semibold">Janjian Pada:</h6>
                    <p class="text-normal">18 Agustus 2022 15:08 WIB</p>
                  </div>
                  <div class="w-1/2 lg:w-1/3 my-3">
                    <h6 class="font-semibold">Pesanan dibuat pada:</h6>
                    <p class="text-normal">17 Agustus 2022</p>
                  </div>
                  <div class="w-1/2 lg:w-1/3 my-3">
                    <h6 class="font-semibold">Tipe Pembayaran:</h6>
                    <p class="text-normal">Pembayaran Tunai</p>
                  </div>
                  <div class="w-1/2 lg:w-1/3 my-3">
                    <h6 class="font-semibold">Alamat klinik:</h6>
                    <p class="text-normal">Jl bromo no 37 kauman kalangbret</p>
                  </div>
                </div>
                <hr class="w-full border-dark my-4">
                <div class="flex flex-row justify-between my-1">
                  <span class="w-1/2 lg:w-1/3 font-bold">
                    Biaya layanan:
                  </span>
                  <span class="w-1/2 lg:w-1/3 font-normal">
                    Rp80.000,00
                  </span>
                </div>
                <div class="flex flex-row justify-between my-1">
                  <span class="w-1/2 lg:w-1/3 font-bold">
                    Total:
                  </span>
                  <span class="w-1/2 lg:w-1/3 font-normal">
                    Rp80.000,00
                  </span>
                </div>
                <div class="flex flex-row justify-between my-6">
                  <span class="w-1/2 lg:w-1/3 font-bold"></span>
                  <span class="w-1/2 lg:w-1/3 text-[30px] lg:text-section-header font-bold">
                    Rp80.000,00
                  </span>
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
