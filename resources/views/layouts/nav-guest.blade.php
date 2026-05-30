<nav class="px-1 pt-5 bg-gray-50 dark:bg-gray-800 fixed top-0 w-full z-50">
    <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 border rounded-full shadow dark:border-gray-500">
        <a href="{{ route('/') }}" class="flex items-center space-x-2 rtl:space-x-reverse">
            <svg class="w-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14" />
            </svg>
            <span
                class="self-center text-xl text-heading font-semibold whitespace-nowrap">{{ config('app.name') }}</span>
        </a>
        <div class="flex justify-between items-center md:hidden">
            <div class="relative theme-dropdown me-2">
                <button type="button"
                    class="theme-dropdown-button inline-flex items-center rounded-full border border-gray-200 bg-gray-100 p-2 text-sm font-medium text-gray-700 shadow-sm transition hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-200 dark:hover:bg-gray-800"
                    aria-expanded="false" aria-haspopup="true">
                    <span class="theme-mode-icon inline-flex h-5 w-5 text-gray-600 dark:text-gray-300"></span>
                </button>
                <div
                    class="theme-dropdown-menu hidden absolute right-0 z-50 mt-2 w-36 origin-top-right overflow-hidden rounded-xl border border-gray-200 bg-white py-1 shadow-xl dark:border-gray-600 dark:bg-gray-900">
                    <button type="button"
                        class="theme-dropdown-item flex w-full items-center gap-2 px-3 py-2 text-left text-sm text-gray-700 transition hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-800"
                        data-theme-mode="system">
                        <span class="inline-flex h-5 w-5 items-center justify-center text-gray-600 dark:text-gray-300">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <rect x="3" y="5" width="18" height="12" rx="2" />
                                <path d="M8 21h8" />
                                <path d="M12 17v4" />
                            </svg>
                        </span>
                        Sistem
                    </button>
                    <button type="button"
                        class="theme-dropdown-item flex w-full items-center gap-2 px-3 py-2 text-left text-sm text-gray-700 transition hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-800"
                        data-theme-mode="light">
                        <span class="inline-flex h-5 w-5 items-center justify-center">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364l-1.414 1.414M7.05 16.95l-1.414 1.414m0-11.314l1.414 1.414M18.364 17.657l1.414 1.414M12 8a4 4 0 100 8 4 4 0 000-8z" />
                            </svg>
                        </span>
                        Terang
                    </button>
                    <button type="button"
                        class="theme-dropdown-item flex w-full items-center gap-2 px-3 py-2 text-left text-sm text-gray-700 transition hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-800"
                        data-theme-mode="dark">
                        <span class="inline-flex h-5 w-5 items-center justify-center">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                            </svg>
                        </span>
                        Gelap
                    </button>
                </div>
            </div>
            <button data-collapse-toggle="nav-guest-mobile" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
            aria-controls="nav-guest-mobile" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
        </svg>
    </button>
</div>
        <div class="hidden w-full md:block md:w-auto mx-3">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 md:pe-5 mt-4 border rounded md:flex-row md:items-center md:space-x-4 rtl:space-x-reverse md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('/') }}" class="block py-2 px-3 rounded md:p-0">Home</a>
                </li>
                <li>
                    <a href="{{ route('layanan') }}" class="block py-2 px-3 rounded md:p-0">Layanan</a>
                </li>
                <li class="ps-5 relative theme-dropdown">
                    <button type="button"
                        class="theme-dropdown-button inline-flex items-center rounded-full border border-gray-200 bg-gray-100 p-2 text-sm font-medium text-gray-700 shadow-sm transition hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-200 dark:hover:bg-gray-800"
                        aria-expanded="false" aria-haspopup="true">
                        <span class="theme-mode-icon inline-flex h-5 w-5 text-gray-600 dark:text-gray-300"></span>
                    </button>
                    <div
                        class="theme-dropdown-menu hidden absolute right-0 z-50 mt-2 w-36 origin-top-right overflow-hidden rounded-xl border border-gray-200 bg-white py-1 shadow-lg dark:border-gray-700 dark:bg-gray-900">
                        <button type="button"
                            class="theme-dropdown-item flex w-full items-center gap-2 px-3 py-2 text-left text-sm text-gray-700 transition hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-800"
                            data-theme-mode="system">
                            <span
                                class="inline-flex h-5 w-5 items-center justify-center text-gray-600 dark:text-gray-300">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <rect x="3" y="5" width="18" height="12" rx="2" />
                                    <path d="M8 21h8" />
                                    <path d="M12 17v4" />
                                </svg>
                            </span>
                            Sistem
                        </button>
                        <button type="button"
                            class="theme-dropdown-item flex w-full items-center gap-2 px-3 py-2 text-left text-sm text-gray-700 transition hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-800"
                            data-theme-mode="light">
                            <span class="inline-flex h-5 w-5 items-center justify-center">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364l-1.414 1.414M7.05 16.95l-1.414 1.414m0-11.314l1.414 1.414M18.364 17.657l1.414 1.414M12 8a4 4 0 100 8 4 4 0 000-8z" />
                                </svg>
                            </span>
                            Terang
                        </button>
                        <button type="button"
                            class="theme-dropdown-item flex w-full items-center gap-2 px-3 py-2 text-left text-sm text-gray-700 transition hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-800"
                            data-theme-mode="dark">
                            <span class="inline-flex h-5 w-5 items-center justify-center">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                                </svg>
                            </span>
                            Gelap
                        </button>
                    </div>
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