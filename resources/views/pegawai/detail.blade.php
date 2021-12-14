@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT DATA Pegawai')

@section('konten')
    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <div class="container" id="detail">
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <label for="nama" class="col-sm-8 control-label">{{ $p->pegawai_nama }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <label for="nama" class="col-sm-8 control-label">{{ $p->pegawai_jabatan }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Umur</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <label for="nama" class="col-sm-8 control-label">{{ $p->pegawai_umur }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <label for="nama" class="col-sm-8 control-label">{{ $p->pegawai_alamat }}
                        </div>
                    </div>
                </div>
            </div>




        </div>


    @endforeach
@endsection
