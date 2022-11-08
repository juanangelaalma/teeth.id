@if (session('success'))
    <!-- Success Alert -->
    <div class="p-2 md:p-3 rounded text-emerald-700 bg-emerald-100">
        <div class="flex items-center">
            <svg class="hi-solid hi-check-circle inline-block w-5 h-5 mr-3 flex-none text-emerald-500" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            <h3 class="font-semibold">{{ session('success') }}</h3>
        </div>
    </div>
    <!-- END Success Alert -->
@endif
