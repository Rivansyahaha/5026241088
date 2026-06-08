<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BolpenDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaikuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']); // jangan lupa diganti
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// route CRUD - pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// route bolpen
Route::get('/bolpen', [BolpenDBController::class, 'indexBolpen']);
Route::get('/bolpen/tambah_bolpen', [BolpenDBController::class, 'tambah_bolpen']);
Route::post('/bolpen/store_bolpen', [BolpenDBController::class, 'store_bolpen']);
Route::get('/bolpen/edit_bolpen/{id}', [BolpenDBController::class, 'edit_bolpen']);
Route::post('/bolpen/update_bolpen', [BolpenDBController::class, 'update_bolpen']);
Route::get('/bolpen/hapus_bolpen/{id}', [BolpenDBController::class, 'hapus_bolpen']);
Route::get('/bolpen/cari_bolpen', [BolpenDBController::class, 'cari_bolpen']);

// route keranjang belanja
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'tambah'])->name('keranjang.tambah');
Route::post('/keranjang/store', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::get('/keranjang/{id}/edit', [KeranjangBelanjaController::class, 'edit'])->name('keranjang.edit');
Route::put('/keranjang/{id}/update', [KeranjangBelanjaController::class, 'update'])->name('keranjang.update');
Route::delete('/keranjang/{id}', [KeranjangBelanjaController::class, 'batal'])->name('keranjang.batal');
//

// route nilai kuliah
Route::get('/nilaikuliah', [NilaikuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/tambah', [NilaikuliahController::class, 'tambah'])->name('nilaikuliah.tambah');
Route::post('/nilaikuliah/store', [NilaikuliahController::class, 'store'])->name('nilaikuliah.store');
//

Route::get('index2', function () {
	return view('index2');
});

Route::get('intro', function () {
	return view('intro');
});

Route::get('news', function () {
	return view('news');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('bs4', function () {
	return view('bootstrap4');
});

Route::get('tp4', function () {
	return view('tugaspertemuan4');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('tugas_ets', function () {
	return view('tugas_ets');
});
