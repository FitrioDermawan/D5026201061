@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'DATA PENDAPATAN')

@section('konten')
	<a href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>

	<br/>
	<br/>

	<table class="styled-table">
        <thead>
		<tr>
			<th>ID Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
    </thead>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->pendapatan_id_pegawai }}</td>
			<td>{{ $p->pendapatan_bulan }}</td>
			<td>{{ $p->pendapatan_tahun }}</td>
			<td>{{ $p->pendapatan_gaji }}</td>
            <td>{{ $p->pendapatan_tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->pendapatan_id }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->pendapatan_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection


</body>
</html>
