@extends('layout.happy')
@section('title', 'Data Ikan')
@section('judulhalaman', 'EDIT DATA IKAN')

@section('konten')
    <a href="/ikan"> Kembali</a>

    <br />
    <br />

    @foreach ($ikan as $i)
        <form action="/ikan/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $i->kodeikan }}">
            <div class="container" id="ubah">
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama ikan</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='nama'>
                                <input type="text" class="form-control" required="required" name="nama"
                                    value="{{ $i->namaikan }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Jumlah Ikan</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='jumlah'>
                                <input type="number" class="form-control" required="required" name="jumlah"
                                    value="{{ $i->jumlahikan }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
                            <div class="col-sm-1"> : </div>
                            <div class="col-sm-2">
                                <input type="radio" id="y" name="tersedia" value="Y" @if ($i->tersedia === 'Y') checked="checked" @endif>
                                <label for="y">HADIR</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" id="t" name="tersedia" value="T" @if ($i->tersedia === 'T') checked="checked" @endif>
                                <label for="t">TIDAK</label><br>
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
