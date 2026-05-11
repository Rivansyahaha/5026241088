<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

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

//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

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
