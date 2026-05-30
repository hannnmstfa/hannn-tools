<div class="max-w-screen-sm mx-auto mt-5">
    <p class="text-xs text-gray-500 mb-3">Support: <span class="font-bold text-gray-600 dark:text-gray-400">Google Authenticator, Authy, Microsoft Authenticator, Facebook, Instagram, Binance, GitHub, dll.</span></p>
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
    OTP: {{ $otp }}
</div>