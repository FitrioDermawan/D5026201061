@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT DATA PENDAPATAN')

@section('konten')
    <a href="/pendapatan"> Kembali</a>

    <br />
    <br />

    @foreach ($pendapatan as $c)
        <form action="/pendapatan/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $c->ID }}">
            <div class="container" id="ubah">
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='nama'>
                                <select class="form-control" name="idpegawai">
                                    @foreach ($pegawai as $p)
                                        <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $c->IDPegawai) selected="selected" @endif>
                                            {{ $p->pegawai_nama }}</option>
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
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='bulan'>
                                <input type="number" class="form-control" name="bulan" required="required" max="12" value="{{ $c->Bulan }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Tahun</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='tahun'>
                                <input type="number" class="form-control" name="tahun" required="required" minlength="4" min="1000"
                                maxlength="4" value="{{ $c->Tahun }}"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Gaji</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='gaji'>
                                <input type="number" class="form-control" name="gaji" required="required" maxlength="11" value="{{ $c->Gaji }}"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Tunjangan</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='tunjangan'>
                                <input type="number" class="form-control" name="tunjangan" required="required" maxlength="11" value="{{ $c->Tunjangan }}"></div>
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
        </form>
    @endforeach
@endsection
