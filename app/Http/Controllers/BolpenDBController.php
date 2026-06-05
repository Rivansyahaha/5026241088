<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BolpenDBController extends Controller
{
    public function indexBolpen()
    {
        // mengambil data dari table bolpen
        $bolpen = DB::table('bolpen')->paginate(10);
        // mengirim data bolpen ke view indexBolpen
        return view('indexBolpen', ['bolpen' => $bolpen]);
    }

    // method untuk menampilkan view form tambah_bolpen bolpen
    public function tambah_bolpen()
    {
        // memanggil view tambah_bolpen
        return view('tambah_bolpen');
    }

    // method untuk insert data ke table bolpen
    public function store_bolpen(Request $request)
    {
        // insert data ke table bolpen
        DB::table('bolpen')->insert([
            'merkbolpen'  => $request->merkbolpen,
            'stockbolpen' => $request->stockbolpen,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman bolpen
        return redirect('/bolpen');
    }

    // method untuk edit data bolpen
    public function edit_bolpen($id)
    {
        // mengambil data bolpen berdasarkan id yang dipilih
        $bolpen = DB::table('bolpen')->where('kodebolpen', $id)->get();
        // passing data bolpen yang didapat ke view edit_bolpen.blade.php
        return view('edit_bolpen', ['bolpen' => $bolpen]);
    }

    // update data bolpen
    public function update_bolpen(Request $request)
    {
        // update data bolpen
        DB::table('bolpen')->where('kodebolpen', $request->id)->update([
            'merkbolpen'  => $request->merkbolpen,
            'stockbolpen' => $request->stockbolpen,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman bolpen
        return redirect('/bolpen');
    }

    // method untuk hapus data bolpen
    public function hapus_bolpen($id)
    {
        // menghapus data bolpen berdasarkan id yang dipilih
        DB::table('bolpen')->where('kodebolpen', $id)->delete();
        // alihkan halaman ke halaman bolpen
        return redirect('/bolpen');
    }

    public function cari_bolpen(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table bolpen sesuai pencarian
        $bolpen = DB::table('bolpen')
            ->where('merkbolpen', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data bolpen ke view indexBolpen
        return view('indexBolpen', ['bolpen' => $bolpen]);
    }
}
