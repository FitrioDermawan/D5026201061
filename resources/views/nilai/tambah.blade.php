@extends('layout.happy')
@section('title', 'Data Nilai Kuliah')
@section('judulhalaman', 'TAMBAH DATA NILAI KULIAH')

@section('konten')
    <a href="/nilai" class="btn btn-default btn-sm" role="button"> Kembali</a>

    <br />
    <br />

    <form action="/nilai/store" method="post">
        {{ csrf_field() }}
        <div class="container" id="tambah">
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nrp" class="col-sm-2 control-label">NRP</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='nrp'>
                            <input type="number" class="form-control" name="nrp" required="required" maxlength="6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nilaiangka" class="col-sm-2 control-label">Nilai Angka</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='nilaiangka'>
                            <input type="number" class="form-control" name="nilaiangka" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="sks" class="col-sm-2 control-label">SKS</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='sks'>
                            <input type="number" class="form-control" name="sks" required="required">
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
