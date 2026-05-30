@props([
    'id' => 'card-' . uniqid(),
    'soon' => false,
    'title' => "",
    'deskripsi' => '',
    'url' => '#',
])
<a href="{{ $soon ? '#' : $url }}" class="col-span-3 md:col-span-1 p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 cursor-pointer group relative ">
    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-lime-600 dark:group-hover:text-lime-400 transition-colors">{{ $title }}</h3>
    <p class="text-gray-600 dark:text-gray-300">{{ $deskripsi }}</p>
    @if ($soon)
        <div
            class="bg-gray-900 dark:bg-gray-600  w-full h-full absolute top-0 left-0 rounded-xl shadow-lg opacity-70 dark:opacity-90 flex justify-center items-center font-bold text-white dark:text-lime-300">
            Coming Soon...
        </div>
    @endif
</a>