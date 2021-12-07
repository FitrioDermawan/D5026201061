@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'TAMBAH DATA PENDAPATAN')

@section('konten')
	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
        <div class="container" id="ubah">
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Bulan <input type="number" name="bulan" required="required"> <br/>
		Tahun <input type="text" name="tahun" required="required" maxlength="4"> <br/>
        Gaji <input type="number" name="gaji" required="required"> <br/>
        Tunjangan <input type="number" name="tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-green">
	</form>
@endsection
