<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

Route::view('home', 'home')->name('home');
// User Route
Route::view('home/wisata', 'wisata')->name('wisata');
Route::view('home/galeri', 'galeri')->name('galeri');
Route::view('home/wisata/detail', 'detail_wisata')->name('detail_wisata');
Route::view('home/kontak', 'contact')->name('contact');
Route::view('home/tentang', 'tentang')->name('tentang');
Route::view('home/galeri/detail', 'detail-galeri')->name('detail-galeri');

// Login Route
Route::get('', [LoginController::class, 'logout'])->name('logout');
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
});

// CRUD Galeri
Route::view('dashboard/galeri/tambah', 'dashboard.kelola_galeri.tambah-galeri')->name('tambah-galeri');
Route::view('dashboard/galeri/edit', 'dashboard.kelola_galeri.edit-galeri')->name('edit-galeri');

// CRUD Tentang
Route::view('dashboard/tentang/tambah', 'dashboard.kelola_tentang.tambah-tentang')->name('tambah-tentang');
Route::view('dashboard/tentang/edit', 'dashboard.kelola_tentang.edit-tentang')->name('edit-tentang');

// CRUD Kontak
Route::view('dashboard/kontak/edit', 'dashboard.kelola_kontak.edit-kontak')->name('edit-kontak');

// CRUD hotel
Route::view('dashboard/hotel/tambah', 'dashboard.kelola_hotel.tambah-hotel')->name('tambah-hotel');
Route::view('dashboard/hotel/edit', 'dashboard.kelola_hotel.edit-hotel')->name('edit-hotel');

// CRUD Pesan
Route::view('dashboard/pesan/edit', 'dashboard.pesan.edit-pesan')->name('edit-pesan');