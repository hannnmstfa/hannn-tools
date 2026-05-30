<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TwoFAController extends Controller
{
    public function index(){
        return view('layanan.2fa.index');
    }
}
