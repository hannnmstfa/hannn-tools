<?php

namespace App\Livewire\Layanan;

use Livewire\Component;
use PragmaRX\Google2FA\Google2FA;

class TwoFaController extends Component
{
    public $secret = '';
    public $otp = null;

    public function generate()
    {
        $this->resetErrorBag();
        $this->otp = null;

        $this->validate([
            'secret' => 'required|min:8',
        ], [
            'secret.min' => 'Karakter terlalu pendek'
        ]);

        try {
            $secret = strtoupper(
                str_replace(' ', '', trim($this->secret))
            );

            $google2fa = app(Google2FA::class);

            $this->otp = $google2fa->getCurrentOtp($secret);

        } catch (\Throwable $e) {
            $this->addError(
                'secret',
                'Secret key tidak valid.'
            );
        }
    }

    public function render()
    {
        return view('livewire.layanan.two-fa-controller');
    }
}