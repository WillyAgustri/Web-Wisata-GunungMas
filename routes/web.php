<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientDetailController;
use App\Http\Controllers\ClientDetailGaleriController;
use App\Http\Controllers\ClientGaleriController;
use App\Http\Controllers\ClientHomeController;
use App\Http\Controllers\ClientKontakController;
use App\Http\Controllers\ClientTentangController;
use App\Http\Controllers\ClientWisataController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

// User Route
Route::resource('/', ClientHomeController::class)->names('home');
Route::resource('home/wisata', ClientWisataController::class)->names('home.wisata');
Route::get('home/wisata/detail/{id_wisata}', [ClientDetailController::class, 'index'])->name('wisata.detail');
Route::get('home/galeri/detail/{id_wisata}', [ClientDetailGaleriController::class, 'index'])->name('galeri.detail');
Route::resource('home/galeri', ClientGaleriController::class)->names('home.galeri');
Route::resource('home/tentang', ClientTentangController::class)->names('home.tentang');
Route::resource('home/kontak', ClientKontakController::class)->names('home.kontak');

// Login Route
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('login', LoginController::class);

// Admin Route
Route::group(['middleware' => ['CekLoginUser']], function () {
    // Overview Admin
    Route::view('dashboard/home', 'dashboard.home-admin')->name('home-dashboard');
    Route::view('dashboard/wisata', 'dashboard.kelola_wisata.kelola-wisata')->name('kelola-wisata');
    Route::view('dashboard/galeri', 'dashboard.kelola_galeri.kelola-galeri')->name('kelola-galeri');
    Route::view('dashboard/tentang', 'dashboard.kelola_tentang.kelola-tentang')->name('kelola-tentang');
    Route::view('dashboard/kontak', 'dashboard.kelola_kontak.kelola-kontak')->name('kelola-kontak');
    Route::view('dashboard/hotel', 'dashboard.kelola_hotel.kelola-hotel')->name('kelola-hotel');
    Route::view('dashboard/pesan', 'dashboard.pesan.kelola-pesan')->name('kelola-pesan');

    // CRUD ADMIN
    Route::view('dashboard/admin/tambah', 'dashboard.kelola_admin.tambah-admin')->name('tambah-admin');
    Route::get('dashboard/admin/{id_admin}/edit', [AdminController::class, 'edit_index'])->name('edit-admin');
    Route::resource('dashboard/admin', AdminController::class)->names('dashboard.admin');

    // CRUD Wisata
    Route::get('dashboard/wisata/{id_wisata}/edit', [WisataController::class, 'edit_index'])->name('edit-wisata');
    Route::view('dashboard/wisata/tambah', 'dashboard.kelola_wisata.tambah-wisata')->name('tambah-wisata');
    Route::resource('dashboard/wisata', WisataController::class)->names('dashboard.wisata');

    // CRUD Galeri
    Route::get('dashboard/galeri/{id_galeri}/edit', [GaleriController::class, 'edit_index'])->name('edit-galeri');
    Route::get('dashboard/galeri/tambah', [GaleriController::class, 'tambah_index'])->name('tambah-galeri');
    Route::resource('dashboard/galeri', GaleriController::class)->names('dashboard.galeri');

    // CRUD Tentang
    Route::get('dashboard/tentang/{id_tentang}/edit', [TentangController::class, 'edit_index'])->name('edit-tentang');
    Route::view('dashboard/tentang/tambah', 'dashboard.kelola_tentang.tambah-tentang')->name('tambah-tentang');
    Route::resource('dashboard/tentang', TentangController::class)->names('dashboard.tentang');

    // CRUD Kontak
    Route::get('dashboard/kontak/{id_kontak}/edit', [KontakController::class, 'edit_index'])->name('edit-kontak');
    Route::resource('dashboard/kontak', KontakController::class)->names('dashboard.kontak');

    // CRUD hotel
    Route::get('dashboard/hotel/{id_hotel}/edit', [HotelController::class, 'edit_index'])->name('edit-hotel');
    Route::view('dashboard/hotel/tambah', 'dashboard.kelola_hotel.tambah-hotel')->name('tambah-hotel');
    Route::resource('dashboard/hotel', HotelController::class)->names('dashboard.hotel');

    // CRUD Pesan
    Route::get('dashboard/pesan/{id_pesan}/edit', [PesanController::class, 'edit_index'])->name('edit-pesan');
    Route::resource('dashboard/pesan', PesanController::class)->names('dashboard.pesan');
});
