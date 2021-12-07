<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{
    public function index()
    {
        // mengambil data dari table tugas
        $tugas = DB::table('tugas')->get();

        // mengirim data tugas ke view index
        return view('tugas.index', ['tugas' => $tugas]);
    }

    // method untuk menampilkan view form tambah tugas
    public function tambah()
    {

        // memanggil view tambah
        return view('tugas.tambah');
    }

    // method untuk insert data ke table tugas
    public function store(Request $request)
    {
        // insert data ke table tugas
        DB::table('tugas')->insert([
            'tugas_id_pegawai' => $request->idpegawai,
            'tugas_tanggal' => $request->tanggal,
            'tugas_nama' => $request->namatugas,
            'tugas_status' => $request->status
        ]);
        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }
}
