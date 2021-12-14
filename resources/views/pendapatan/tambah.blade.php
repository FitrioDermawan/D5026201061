@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'TAMBAH DATA PENDAPATAN')

@section('konten')
    <a href="/pendapatan"> Kembali</a>

    <br />
    <br />

    <form action="/pendapatan/store" method="post">
        {{ csrf_field() }}
        <div class="container" id="tambah">
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach ($pegawai as $c)
                                    <option value="{{ $c->pegawai_id }}"> {{ $c->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Bulan</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='bulan'>
                            <input type="number" class="form-control" name="bulan" required="required" max="12">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Tahun</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='tahun'>
                            <input type="number" class="form-control" name="tahun" required="required" minlength="4" min="1000" maxlength="4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Gaji</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='gaji'>
                            <input type="number" class="form-control" name="gaji" required="required" maxlength="11">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Tunjangan</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='tunjangan'>
                            <input type="number" class="form-control" name="tunjangan" required="required" maxlength="11">
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-green" value="Simpan Data">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
