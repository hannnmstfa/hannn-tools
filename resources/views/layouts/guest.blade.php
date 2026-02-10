<!DOCTYPE html>
@include('layouts.head')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="font-poppins antialiased">
        <div class="container bg-gray-50 dark:bg-gray-800 min-h-screen">
            @include('layouts.nav-guest')
        </div>
    </body>
</html>
