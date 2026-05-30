<x-layanan-layout title="QR Code {{ $qr->nama_qr }}">
    <h1 class="text-4xl text-center font-bold">Berhasil dibuat</h1>
    <div class="max-w-screen-sm mx-auto mt-5">
        <div class="flex justify-center items-center">
            <a href="{{ asset($qr->path_qr) }}" download="hanstd-tools-{{ Str::slug($qr->nama_qr) }}"
                class="bg-lime-500 hover:bg-lime-600 py-2 px-4 rounded font-bold text-white flex justify-center items-center gap-2"
                download>
                <p>Download QR</p>
            </a>
        </div>
    </div>
</x-layanan-layout>
<script src="https://pl29589874.effectivecpmnetwork.com/02/fc/87/02fc87b8401efe93647218a4976b9be2.js"></script>
