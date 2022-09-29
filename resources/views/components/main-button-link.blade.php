<a {{ $attributes->merge(['href' => '/', 'class' => 'bg-primary py-3 px-7 text-white rounded-xl shadow-button-primary text-btn cursor-pointer active:shadow-none active:translate-x-1 active:translate-y-1']) }}>
    {{ $slot }}
</a>