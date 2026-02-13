<nav class="px-1 pt-5 bg-gray-50 dark:bg-gray-800 fixed top-0 w-full">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 border rounded-full shadow">
        <a href="{{ route('/') }}" class="flex items-center space-x-2 rtl:space-x-reverse">
            <svg class="w-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14" />
            </svg>
            <span
                class="self-center text-xl text-heading font-semibold whitespace-nowrap">{{ config('app.name') }}</span>
        </a>
        <button data-collapse-toggle="nav-guest-mobile" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
            aria-controls="nav-guest-mobile" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto mx-3">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 md:pe-5 mt-4 border rounded md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('/') }}" class="block py-2 px-3 rounded md:p-0">Home</a>
                </li>
                <li>
                    <a href="{{ route('layanan') }}" class="block py-2 px-3 rounded md:p-0">Layanan</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hidden w-max-screen-xl mx-auto" id="nav-guest-mobile">
        <ul
            class="font-medium flex flex-col p-4 md:p-0 md:pe-5 mt-4 border rounded md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
            <li>
                <a href="{{ route('/') }}" class="block py-2 px-3 rounded md:p-0">Home</a>
            </li>
            <li>
                <a href="{{ route('layanan') }}" class="block py-2 px-3 rounded md:p-0">Layanan</a>
            </li>
        </ul>
    </div>
</nav>