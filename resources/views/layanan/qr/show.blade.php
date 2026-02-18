<x-guest-layout title="QR Code {{ $qr->nama_qr }}">
    <h1 class="text-4xl text-center font-bold">QR Code <span class="text-lime-600 dark:text-lime-400">Berhasil
            dibuat</span></h1>
    <div class="max-w-screen-sm mx-auto mt-5">
        <div class="flex justify-center items-center">
            <a href="{{ asset($qr->path_qr) }}" download="hanstd-tools-{{ Str::slug($qr->nama_qr) }}"
                class="bg-lime-500 hover:bg-lime-600 py-2 px-4 rounded font-bold text-white flex justify-center items-center gap-2"
                download>
                <p>Download QR</p>
            </a>
        </div>
    </div>
</x-guest-layout>
<script async="async" data-cfasync="false"
    src="https://pl28706939.effectivegatecpm.com/244996b92c1ce027c0a8ed639914f8a4/invoke.js"></script>