@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DATA PEGAWAI')

@section('konten')
    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br />
    <br />
    <div class="container">
        <div class="row">
            <p>Cari Data Pegawai :</p>
            <form action="/pegawai/cari" method="GET">
                <div class='col-sm-6 input-group' id='umur'>
                    <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .."
                        value="{{ old('cari') }}">
                    <input class="form-control btn-success" type="submit" value="CARI">
                </div>
            </form>
        </div>
    </div>

    <table class="styled-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-default btn-sm" role="button">View

                        <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                        |
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $pegawai->links() }}

@endsection

