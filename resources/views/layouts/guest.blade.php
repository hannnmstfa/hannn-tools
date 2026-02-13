<!DOCTYPE html>
@include('layouts.head')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body class="font-poppins antialiased">
    <div class="w-full min-h-screen bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-gray-100">
        @include('layouts.nav-guest')
        <div class="max-w-screen-xl pt-28 md:pt-24 mx-auto px-5 h-full">
            {{ $slot }}
        </div>
        @include('layouts.footer')
    </div>
    @include('sweetalert::alert')
</body>
</html>