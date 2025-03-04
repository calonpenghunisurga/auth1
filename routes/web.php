<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth', 'admin']);


//CATATAN KODE ⬇️⬇️⬇️

//Route untuk admin/dasboard Dan memanggil HomeController dengan class index

//Kode ini membuat route untuk halaman admin dengan dua middleware:

// 'auth' → Memastikan user sudah login.
// 'admin' → Memastikan user yang login adalah admin.
// 📌 Cara Kerja Route Ini
// Jika user belum login → Akan diarahkan ke halaman login.
// Jika user login tapi bukan admin → Bisa diarahkan ke halaman lain (biasanya home atau error page).
// Jika user adalah admin → Bisa mengakses admin/dashboard.
