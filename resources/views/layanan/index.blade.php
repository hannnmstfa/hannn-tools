<x-guest-layout title="Layanan">
    <h1 class="text-4xl text-center font-bold">Daily<span class="text-lime-600 dark:text-lime-400"> Tools</span></h1>
    <section id="daily" class="grid grid-cols-3 gap-3 space-y-3 md:space-y-0 mt-5 mb-7">
        <a href="{{ route('qr.index') }}"
            class="col-span-3 md:col-span-1 p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 dark:bg-gray-800 cursor-pointer group relative">
            <h3
                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-lime-600 dark:group-hover:text-lime-400 transition-colors">
                QR Generator</h3>
            <p class="text-gray-600 dark:text-gray-300">Buat QR Code dari teks atau link</p>
        </a>
        <a href="#"
            class="col-span-3 md:col-span-1 p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 dark:bg-gray-800 cursor-pointer group relative">
            <h3
                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-lime-600 dark:group-hover:text-lime-400 transition-colors">
                Image Compresor</h3>
            <p class="text-gray-600 dark:text-gray-300">Kompres ukuran gambar online</p>
            <div
                class="bg-gray-900 w-full h-full absolute top-0 left-0 rounded-xl shadow-lg opacity-50 flex justify-center items-center font-bold text-white">
                Coming Soon...
            </div>
        </a>
    </section>
    <h1 class="text-4xl text-center font-bold">Developer<span class="text-lime-600 dark:text-lime-400"> Tools</span>
    </h1>
    <section id="dev" class="grid grid-cols-3 gap-3 space-y-3 md:space-y-0 mt-5 mb-7">
        <a href=""
            class="col-span-3 md:col-span-1 p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 dark:bg-gray-800 cursor-pointer group relative">
            <h3
                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-lime-600 dark:group-hover:text-lime-400 transition-colors">
                Base64 Converter</h3>
            <p class="text-gray-600 dark:text-gray-300">Ubah teks ke Base64 dan sebaliknya.</p>
            <div
                class="bg-gray-900 w-full h-full absolute top-0 left-0 rounded-xl shadow-lg opacity-50 flex justify-center items-center font-bold text-white">
                Coming Soon...
            </div>
        </a>
    </section>
</x-guest-layout>