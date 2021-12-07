@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'EDIT DATA ABSEN')

@section('konten')

    <a href="/absen"> Kembali</a>

    <br />
    <h3>{{ $status }}</h3>
    <br />

    @foreach ($absen as $a)
        <form action="/absen/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $a->ID }}">
            <br>
            <div class="container" id="ubah">
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>
                            <div class="col-sm-1"> : </div>
                            <div class='col-sm-4 input-group date' id='nama'>
                                <select class="form-control" name="idpegawai">
                                    @foreach ($pegawai as $p)
                                        <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai) selected="selected" @endif>
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
                            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-1"> : </div>
                            <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                                <input type='text' class="form-control" name="tanggal" required="required"
                                    value="{{ $a->Tanggal }}" />
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
                                locale: "id"
                            });
                        });
                    </script>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-1"> : </div>
                            <div class="col-sm-2">
                                <input type="radio" id="h" name="status" value="H" @if ($a->Status === 'H') checked="checked" @endif>
                                <label for="h">HADIR</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" id="a" name="status" value="A" @if ($a->Status === 'A') checked="checked" @endif>
                                <label for="a">TIDAK HADIR</label><br>
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
