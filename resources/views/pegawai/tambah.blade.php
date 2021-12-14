@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'TAMBAH DATA PEGAWAI')

@section('konten')
    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="container" id="tambah">
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='nama'>
                            <input type="text" class="form-control" name="nama" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='jabatan'>
                            <input type="text" class="form-control" name="jabatan" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Umur</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='umur'>
                            <input type="number" class="form-control" name="umur" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='alamat'>
                            <textarea name="alamat" class="form-control" required="required"></textarea>
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
