@extends('layout.happy')
@section('title', 'Data Ikan')
@section('judulhalaman', 'TAMBAH DATA IKAN')

@section('konten')
    <a href="/ikan"> Kembali</a>

    <br />
    <br />

    <form action="/ikan/store" method="post">
        {{ csrf_field() }}
        <div class="container" id="tambah">
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Ikan</label>
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
                        <label for="nama" class="col-sm-2 control-label">Jumlah Ikan</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='jumlah'>
                            <input type="number" class="form-control" name="jumlah" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
                        <div class="col-sm-1"> : </div>
                        <div class="col-sm-2">
                            <input type="radio" id="y" name="tersedia" value="Y">
                            <label for="y">YA</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="radio" id="t" name="tersedia" value="T" checked="checked">
                            <label for="t">TIDAK</label>
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
