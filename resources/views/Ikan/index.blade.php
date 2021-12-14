@extends('layout.happy')
@section('title', 'Data Ikan')
@section('judulhalaman', 'DATA IKAN')

@section('konten')
    <a href="/ikan/tambah"> + Tambah Ikan Baru</a>

    <br />
    <br />
    <div class="container">
        <div class="row">
            <p>Cari Data Ikan :</p>
            <form action="/ikan/cari" method="GET">
                <div class='col-sm-6 input-group' id='umur'>
                    <input class="form-control" type="text" name="cari" placeholder="Cari ikan .."
                        value="{{ old('cari') }}">
                    <input class="form-control btn-success" type="submit" value="CARI">
                </div>
            </form>
        </div>
    </div>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Nama Ikan</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
        </thead>
        @foreach ($ikan as $i)
            <tr>
                <td>{{ $i->namaikan }}</td>
                <td>{{ $i->tersedia }}</td>
                <td>
                    <a href="/ikan/detail/{{ $i->kodeikan }}" class="btn btn-default btn-sm" role="button">View

                        <a href="/ikan/edit/{{ $i->kodeikan }}">Edit</a>
                        |
                        <a href="/ikan/hapus/{{ $i->kodeikan }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $ikan->links() }}

@endsection

