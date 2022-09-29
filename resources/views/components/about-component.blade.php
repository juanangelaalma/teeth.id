<x-section-component class="bg-white py-12">
    <div class="w-full flex flex-col space-y-4 lg:flex-row lg:space-y-0">
        <div class="w-full lg:w-1/2 flex justify-center">
            <div
                class="bg-secondary-light rounded-xl relative w-full h-[22.5rem] lg:w-[31rem] lg:h-[29rem] lg:max-w-1/2">
                <img class="absolute bottom-0 left-[50%] translate-x-[-50%] w-full"
                    src="{{ asset('assets/images/doctor-about.png') }}" alt="">
                <div
                    class="flex flex-col items-center space-y-[2px] glassmorphism-box rounded-xl absolute -top-6  left-[40%] translate-x-[-50%] py-3 px-6">
                    <h5 class="text-[25px] text-dark font-bold">20+</h5>
                    <p class="text-xs ml-1 text-primary font-weight-[500]">Doctors</p>
                </div>
                <div
                    class="flex flex-col items-center space-y-[2px] glassmorphism-box rounded-xl absolute -bottom-6 left-[70%] translate-x-[-50%] py-3 px-6">
                    <h5 class="text-[25px] text-dark font-bold">120+</h5>
                    <p class="text-xs ml-1 text-primary font-weight-[500] truncate">Happy Customers</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-start w-full lg:w-1/2 justify-start space-y-6">
            <span class="font-bold text-[25px] text-primary">About us</span>
            <h1 class="text-section-header font-bold text-dark">Gigi yang sehat dimulai dari perawatan rutin</h1>
            <p class="text-light-gray text-section-paragraph">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <x-main-button-link> Pelajari selengkapnya </x-main-button-link>
        </div>
    </div>
</x-section-component>
