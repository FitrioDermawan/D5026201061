@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'TAMBAH DATA ABSEN')

@section('konten')
    <a href="/absen"> Kembali</a>

    <br />
    <br />

    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <div class="container" id="ubah">

            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>
            <div class='col-lg-12'>
                <div class="form-group">
                    <b>Status :</b>
                    <input type="radio" id="h" name="status" value="H">
                    <label for="h">HADIR</label>
                    <input type="radio" id="a" name="status" value="A" checked="checked">
                    <label for="a">TIDAK HADIR</label>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class='col-lg-12'>
                <input type="submit" class="btn btn-green" value="Simpan Data">
            </div>

        </div>

    </form>
@endsection

