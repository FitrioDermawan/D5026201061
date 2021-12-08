@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT DATA Pendapatan')

@section('konten')
	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}">
        <br>
        <div class="container" id="ubah">
		ID Pegawai <input type="number" name="idpegawai" required="required" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" name="bulan" required="required" value="{{ $p->Bulan }}"> <br/>
		Tahun <input type="text" name="tahun" required="required" maxlength="4" value="{{ $p->Tahun }}"> <br/>
		Gaji <input type="number" name="gaji" required="required" value="{{ $p->Gaji }}"> <br/>
        Tunjangan <input type="number" name="tunjangan" required="required" value="{{ $p->Tunjangan }}"> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-green">
	</form>
	@endforeach
@endsection
