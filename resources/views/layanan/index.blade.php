<x-guest-layout title="Layanan">
    <h1 class="text-4xl text-center font-bold">Daily<span class="text-lime-600 dark:text-lime-400"> Tools</span></h1>
    <section id="daily" class="grid grid-cols-3 gap-3 space-y-3 md:space-y-0 mt-5 mb-7">
        <x-card title="QR Generator" deskripsi="Buat QR Code dari teks atau link" url="{{ route('qr.index') }}" />
        <x-card title="Image Compresor" deskripsi="Perkecil ukuran gambar secara online"
        url="{{ route('imgCompress.index') }}" soon />
    </section>
    <h1 class="text-4xl text-center font-bold">Developer<span class="text-lime-600 dark:text-lime-400"> Tools</span>
</h1>
<section id="dev" class="grid grid-cols-3 gap-3 space-y-3 md:space-y-0 mt-5 mb-7">
        <x-card title="2FA OTP" deskripsi="Generate kode OTP dari secret code 2FA" url="{{ route('2fa.index') }}" />
        <x-card title="Base64 Converter" deskripsi="Ubah teks ke Base64 dan sebaliknya" url="" soon />
    </section>
</x-guest-layout>