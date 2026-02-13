<x-guest-layout title="Home">
    <section class="py-20 px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                Powerful Online Tools, Made Simple with
                <span class="text-lime-600 dark:text-lime-400"> HanStd Tools</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                Kumpulan tools cepat dan ringan untuk membantu pekerjaanmu, mulai dari developer utilities hingga kebutuhan harian.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('layanan') }}"
                    class="w-full sm:w-auto px-8 py-4 bg-lime-600 text-white font-semibold rounded-lg hover:bg-lime-700 transition-colors">
                    Jelajahi Layanan
                </a>
                <!-- <a href="#"
                    class="w-full sm:w-auto px-8 py-4 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-semibold rounded-lg hover:border-lime-600 hover:text-lime-600 dark:hover:border-lime-400 dark:hover:text-lime-400 transition-colors">
                    Learn More
                </a> -->
            </div>
        </div>
    </section>
</x-guest-layout>