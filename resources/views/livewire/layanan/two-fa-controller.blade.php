<div class="max-w-screen-sm mx-auto mt-5">
    <p class="text-xs text-gray-500 mb-3">Support: <span class="font-bold text-gray-600 dark:text-gray-400">Google
            Authenticator, Authy, Microsoft Authenticator, Facebook, Instagram, Binance, GitHub, dll.</span></p>
    <form wire:submit="generate" class="w-full">
        @csrf
        <label for="secret" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
            2FA Secret<span class="text-red-600">*</span>
        </label>
        <input type="text" wire:model="secret" autofocus value="{{ old('secret') }}"
            class="w-full px-4 py-3 bg-white dark:bg-gray-900 border text-sm border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-lime-500 dark:focus:ring-lime-400 focus:border-lime-500 dark:focus:border-lime-400 outline-none transition-colors text-gray-900 dark:text-white"
            placeholder="Masukkan kode 2FA secret untuk generate OTP..." required>
        <x-input-error :messages="$errors->get('secret')" />
        <div class="flex justify-center items-center mt-5">
            <button
                class="bg-lime-500 hover:bg-lime-600 py-2 px-4 rounded font-bold text-white flex justify-center items-center gap-2"
                type="submit">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                        d="M4 4h6v6H4V4Zm10 10h6v6h-6v-6Zm0-10h6v6h-6V4Zm-4 10h.01v.01H10V14Zm0 4h.01v.01H10V18Zm-3 2h.01v.01H7V20Zm0-4h.01v.01H7V16Zm-3 2h.01v.01H4V18Zm0-4h.01v.01H4V14Z" />
                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                        d="M7 7h.01v.01H7V7Zm10 10h.01v.01H17V17Z" />
                </svg>
                <span>Generate</span>
            </button>
        </div>
    </form>
    <div class="{{ $otp ? 'block' : 'hidden' }}">
        <p class="text-center mt-5 text-xs">Kode OTP</p>
        <div
            class="flex justify-center mx-auto gap-3 border w-max border-gray-300 p-2 rounded bg-gray-100 dark:bg-gray-700 dark:border-gray-600">
            <span class="text-xl font-bold text-lime-700 dark:text-lime-300">{{ $otp }}</span>
            <input type="hidden" name="otp" id="otp" value="{{ $otp }}">
            <button data-copy-to-clipboard-target="otp"
                class="flex items-center text-body dark:bg-gray-900 bg-gray-200 border border-lime-300 hover:opacity-80 focus:ring-yellow-700 font-medium leading-5 rounded text-xs px-3 py-1.5">
                <span id="default-message">
                    <span class="flex items-center">
                        <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                        </svg>
                        <span class="text-xs font-semibold">Salin</span>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="flex items-center">
                        <svg class="w-4 h-4 text-fg-brand me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z" />
                        </svg>
                        <span class="text-xs font-semibold text-fg-brand">Tersalin</span>
                    </span>
                </span>
            </button>
            <!-- <script src="https://pl29589874.effectivecpmnetwork.com/02/fc/87/02fc87b8401efe93647218a4976b9be2.js"></script> -->
        </div>
    </div>
</div>
<script>
    window.addEventListener('DOMContentLoaded', function () {
        const copyBtn = document.querySelector('[data-copy-to-clipboard-target="otp"]');
        const defaultMessage = document.getElementById('default-message');
        const successMessage = document.getElementById('success-message');
        if (copyBtn) {
            copyBtn.addEventListener('click', function () {
                setTimeout(() => {
                    showSuccess();
                    setTimeout(() => {
                        resetToDefault();
                    }, 2000);
                }, 100);
            });
        }
        const showSuccess = () => {
            defaultMessage.classList.add('hidden');
            successMessage.classList.remove('hidden');
            copyBtn.classList.add('border-lime-700', 'text-lime-700');
        }
        const resetToDefault = () => {
            defaultMessage.classList.remove('hidden');
            successMessage.classList.add('hidden');
            copyBtn.classList.remove('border-lime-700', 'text-lime-700');
        }
        let adsLoaded = false;
    });

    document.addEventListener('livewire:init', () => {
        Livewire.on('otp-generated', () => {
            if (adsLoaded) return;

            const script = document.createElement('script');
            script.src = 'https://pl29589874.effectivecpmnetwork.com/02/fc/87/02fc87b8401efe93647218a4976b9be2.js';
            document.body.appendChild(script);

            adsLoaded = true;
        });
    });
</script>