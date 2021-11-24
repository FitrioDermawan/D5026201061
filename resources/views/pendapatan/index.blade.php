<!DOCTYPE html>
<html>
<head>
	<title>CRUD Pendapatan</title>
</head>
<body>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
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


</body>
</html>
