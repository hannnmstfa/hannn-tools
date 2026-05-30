<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayananLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $title = null)
    {
    }
    public function render(): View
    {
        return view('layouts.layanan');
    }
}
