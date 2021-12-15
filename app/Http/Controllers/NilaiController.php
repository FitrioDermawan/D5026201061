<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index()
    {
        // mengambil data dari table nilai
        $nilai = DB::table('nilaikuliah')->get();

        // mengirim data nilai ke view index
        return view('nilai.index', ['nilai' => $nilai]);
    }

    // method untuk menampilkan view form tambah nilai
    public function tambah()
    {

        // memanggil view tambah
        return view('nilai.tambah');
    }

    // method untuk insert data ke table nilai
    public function store(Request $request)
    {
        // insert data ke table nilai
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks
        ]);
        // alihkan halaman ke halaman nilai
        return redirect('/nilai');
    }
}
