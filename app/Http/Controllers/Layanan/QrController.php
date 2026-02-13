<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use App\Models\QrGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;

class QrController extends Controller
{
    public function index()
    {
        return view('layanan.qr.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'teks' => 'required|string|max:1000'
        ], [
            'nama.required' => 'Nama QR harus diisi',
            'nama.max' => 'Panjang nama QR maksimal 255 karakter',
            'teks.required' => 'Teks / Link URL harus diisi',
            'teks.max' => 'Panjang teks maksimal 1000 karakter'
        ]);
        $qr = new DNS2D();
        $barcode = $qr->getBarcodePNGPath($request->teks, 'QRCODE');
        $file = file_get_contents(public_path($barcode));
        unlink(public_path($barcode));
        $path = '/storage/' . Str::random(40) . '.png';
        file_put_contents(public_path($path), $file);
        $token = Str::random(20);
        QrGenerator::create([
            'token' => $token,
            'nama_qr' => $request->nama,
            'path_qr' => $path,
        ]);
        toast()->success('QR Code berhasil dibuat!')->width('max-content');
        return to_route('qr.show', $token);
    }
    public function show($token)
    {
        $qr = QrGenerator::where('token', $token)->firstOrFail();
        return view('layanan.qr.show', compact('qr'));
    }
}
