<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link rel="icon" href="https://i.ibb.co/sjwVT6p/Artboard-1-300x.png" sizes="16x16">
    <title>Periksa Mandiri | Risiko Covid-19</title>

    <style>
        body {
            padding-top: 50px;
            padding-bottom: 50px;
            font-family: 'Montserrat', sans-serif;
            background-color: #ffffff;
        }

        .btn-green {
            background-color: #5aa7a7;
            border-color: #5aa7a7;
            border-width: 2px;
            font-weight: bold;
            color: white;
            border-radius: 1;
        }

        .btn-green:hover,
        .btn-green:active,
        .btn-green:focus,
        .btn-green.active {
            background: white;
            color: #5aa7a7;
            border-color: #5aa7a7;
        }

        .border-3 {
            border-color: #5aa7a7 !important;
            border-width: 2px !important;
            background-color: white;
        }
    </style>
    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        $(document).ready(function () {
            $("#name").on('input', function () {
                var expression = /[^a-zA-z ]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })

        $(document).ready(function () {
            $("#nip").on('input', function () {
                var expression = /[^0-9]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })
    </script>
</head>

<body>
    <div class="container-sm pt-sm-5 pb-sm-5" style="background-color: #5aa7a7;">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-auto border-right">
                        <img src="https://i.ibb.co/sjwVT6p/Artboard-1-300x.png" alt="logo" style="width: 50px;">
                    </div>
                    <div class="col-sm-auto border-right" style="font-weight: lighter; color: white; font-size: 100%;">
                        UNIT PELAKSANA TEKNIS KESELAMATAN,
                        <p>KESEHATAN KERJA DAN LINGKUNGAN (K3L)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>
    <div class="container-sm border border-3 p-sm-5">
        <br>
        <div class="row">
            <div class="col-sm">
                <h2 style="text-align: center;">
                    <b>Penilaian Mandiri Risiko COVID-19</b>
                </h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm">
                <h4>
                    Isi data diri Anda.
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <form action="hasil" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group" id="nameform">
                                <label for="name" class="form-label">Nama Lengkap :</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Masukkan nama lengkap anda" required>
                                <div class="invalid-feedback">Mohon isi kolom ini.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" id="nipform">
                                <label for="nip" class="form-label">NIP :</label>
                                <input type="text" class="form-control" name="nip" id="nip" placeholder="Masukkan NIP anda"
                                    maxlength="12" required>
                                <div class="invalid-feedback">Mohon isi kolom ini.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="selectsex">
                        <div class="col-sm">
                            <label for="sex">Jenis kelamin:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="m" name="optsex" id="sexm" required>
                                <label class="form-check-label" for="sexm">Pria</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="f" name="optsex" id="sexf" required>
                                <label class="form-check-label" for="sexf">Wanita</label>
                                <div class="invalid-feedback" style="margin-left: 16px">Mohon pilih opsi ini.</div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm">
                            <h4>Demi kesehatan dan keselamatan bersama, kami mohon Anda untuk
                                menjawab pertanyaan ini secara jujur.</h4>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="q1">
                        <div class="col-sm">
                            <label for="q1">1. Dalam 14 hari terakhir, apakah Anda pernah bepergian ke tempat umum atau
                                tempat keramaian (misalnya pasar,fasilitas pelayanan kesehatan, dll)?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq1" value=1 required>
                                <label class="form-check-label" for="optq1y">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq1" value=0 required>
                                <label class="form-check-label" for="optq1n">Tidak</label>
                                <div class="invalid-feedback" style="margin-left: 16px">Mohon pilih opsi ini.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="q2">
                        <div class="col-sm">
                            <label for="q2">2. Dalam 14 hari terakhir, apakah Anda pernah
                                menggunakan transportasi umum?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq2" value=1
                                    required>
                                <label class="form-check-label" for="optq2y">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq2" value=0
                                    required>
                                <label class="form-check-label" for="optq12n">Tidak</label>
                                <div class="invalid-feedback" style="margin-left: 16px">Mohon pilih opsi ini.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="q3">
                        <div class="col-sm">
                            <label for="q3">3. Dalam 14 hari terakhir, apakah Anda pernah
                                melakukan perjalanan ke luar kota atau ke luar negeri?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq3" value=1
                                    required>
                                <label class="form-check-label" for="optq3y">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq3" value=0
                                    required>
                                <label class="form-check-label" for="optq3n">Tidak</label>
                                <div class="invalid-feedback" style="margin-left: 16px">Mohon pilih opsi ini.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="q4">
                        <div class="col-sm">
                            <label for="q4">4. Dalam 14 hari terakhir, apakah Anda mengikuti
                                kegiatan yang melibatkan banyak orang?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq4" value=1
                                    required>
                                <label class="form-check-label" for="optq4y">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq4" value=0
                                    required>
                                <label class="form-check-label" for="optq4n">Tidak</label>
                                <div class="invalid-feedback" style="margin-left: 16px">Mohon pilih opsi ini.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="q5">
                        <div class="col-sm">
                            <label for="q5">5. Dalam 14 hari terakhir, apakah Anda memiliki riwayat
                                kontak erat(misalnya berjabat tangan, berbicara, atau
                                berada dalam satu ruangan/satu rumah) dengan orang
                                yang dinyatakan sebagai Orang Dalam Pemantauan (ODP)
                                atau Pasien Dalam Pengawasan (PDP) atau pasien positif
                                Covid-19?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq5" value=1
                                    required>
                                <label class="form-check-label" for="optq5y">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq5" value=0
                                    required>
                                <label class="form-check-label" for="optq5n">Tidak</label>
                                <div class="invalid-feedback" style="margin-left: 16px">Mohon pilih opsi ini.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="q6">
                        <div class="col-sm">
                            <label for="q6">6. Dalam 14 hari terakhir, apakah Anda pernah
                                mengalami demam/batuk/pilek/sakit tenggorokan/sesak
                                napas ?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq6" value=1
                                    required>
                                <label class="form-check-label" for="optq6y">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq6" value=0
                                    required>
                                <label class="form-check-label" for="optq6n">Tidak</label>
                                <div class="invalid-feedback" style="margin-left: 16px">Mohon pilih opsi ini.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-green" id="btnsubmit">Lihat hasil</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
