@extends('layout.happy')
@section('title', 'Data Ikan')
@section('judulhalaman', 'EDIT DATA IKAN')

@section('konten')
    <a href="/ikan"> Kembali</a>

    <br />
    <br />

    @foreach ($ikan as $i)
        <div class="container" id="detail">
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Ikan</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <label for="nama" class="col-sm-8 control-label">{{ $i->namaikan }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Jumlah Ikan</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group date' id='jumlah'>
                            <label for="jumlah" class="col-sm-8 control-label">{{ $i->jumlahikan }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Tersedia</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group date' id='tersedia'>
                            <label for="tersedia" class="col-sm-8 control-label">{{ $i->tersedia }}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endforeach
@endsection
