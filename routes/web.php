<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\Layanan\QrController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'home'])->name('/');
Route::get('/layanan', [GuestController::class, 'layanan'])->name('layanan');
Route::resource('/layanan/qr-generator', QrController::class)->names('qr');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
