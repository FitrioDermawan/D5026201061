@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT DATA PEGAWAI')

@section('konten')
    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="container" id="ubah">
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='nama'>
                                <input type="text" class="form-control" required="required" name="nama"
                                    value="{{ $p->pegawai_nama }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Jabatan</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='jabatan'>
                                <input type="text" class="form-control" required="required" name="jabatan"
                                    value="{{ $p->pegawai_jabatan }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Jabatan</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='umur'>
                                <input type="number" class="form-control" required="required" name="umur"
                                    value="{{ $p->pegawai_umur }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='alamat'>
                                <textarea required="required" class="form-control"
                                    name="alamat">{{ $p->pegawai_alamat }}</textarea>
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
    @endforeach
@endsection
