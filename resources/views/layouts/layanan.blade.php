<!DOCTYPE html>
@include('layouts.head')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body class="font-poppins antialiased">
    <div class="w-full min-h-screen bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-gray-100">
        @include('layouts.nav-guest')
        <div class="max-w-screen-xl mx-auto pt-32 md:pt-28">
            <h1 class="text-4xl text-center font-bold">{{ explode(' ', $title)[0] }}<span class="text-lime-600 dark:text-lime-400">
                    {{ explode(' ', $title)[1] }}</span></h1>
            <div class="grid grid-cols-8 justify-between gap-2">
                <div class="col-span-1 w-full">
                    <p class="text-xs text-gray-400">Advertising:</p>
                    <div id="container-52c759bac8874ebe84f06095d3990a1c" class="bg-gray-400 dark:bg-gray-700 border rounded border-gray-300 dark:border-gray-600"></div>
                </div>
                <div class="col-span-6 w-full mx-auto px-3">
                    {{ $slot }}
                </div>
                <div class="col-span-1 w-full">
                    <p class="text-xs text-gray-400">Advertising:</p>
                    <a href="https://hanstd.com/#kontak" target="_blank">
                        <img src="https://pub-8f4153723cd0473bb68fb9b01dee732d.r2.dev/contact2.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
    @include('sweetalert::alert')
</body>

</html>