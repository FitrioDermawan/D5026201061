@extends('layout.happy')
@section('title', 'Data Nilai')
@section('judulhalaman', 'DATA NILAI')

@section('konten')
    <a href="/nilai/tambah" class="btn btn-default btn-sm" role="button"> + Tambah Data</a>

    <br />
    <br />

    <table class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    <?php
                    if ($n->NilaiAngka <= 40) {
                        echo 'D';
                    } elseif ($n->NilaiAngka >= 41 && $n->NilaiAngka <= 60) {
                        echo 'C';
                    } elseif ($n->NilaiAngka >= 61 && $n->NilaiAngka <= 80) {
                        echo 'B';
                    } else {
                        echo 'A';
                    }
                    ?>
                </td>
                <td>{{ number_format($n->SKS * $n->NilaiAngka, 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </table>
@endsection
