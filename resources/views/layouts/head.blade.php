<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title . ' - ' . config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3683911400321928"
        crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/font.css', 'resources/js/app.js'])
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        (function () {
            const theme = localStorage.getItem('color-theme') || 'system';
            const useDark = theme === 'dark' || (theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches);

            if (useDark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>
    <script async="async" data-cfasync="false"
        src="https://pl29589485.effectivecpmnetwork.com/52c759bac8874ebe84f06095d3990a1c/invoke.js"></script>
    @livewireScriptConfig
</head>