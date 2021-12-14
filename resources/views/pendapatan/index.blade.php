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
            <th>No</th>
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
    </thead>
		@foreach($pendapatan as $c)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $c->pegawai_nama }}</td>
			<td>{{ $c->Bulan }}</td>
			<td>{{ $c->Tahun }}</td>
			<td>{{ $c->Gaji }}</td>
            <td>{{ $c->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $c->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $c->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection


</body>
</html>
