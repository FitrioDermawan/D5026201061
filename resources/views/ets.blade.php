<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Form Input Data Barang</title>
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        #borderatas {
            border: 2px solid black;
        }

        #namabr,
        #hargabr,
        #jenisbr,
        #kodebrc {
            border-radius: 0;
            border: 2px solid black;
        }

        #tombolreset,
        #tombolsubmit {
            border-radius: 0;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <script>
        (function validate() {
            ;
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
            $("#hargabr").on('input', function () {
                var expression = /[^0-9]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })

        $(document).ready(function () {
            $("#kodebrc").on('input', function () {
                var expression = /[^0-9]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })
    </script>
</head>

<body>
    <div class="container p-sm-3 pl-sm-3" id="borderatas">
        <div class="container" style="font-weight: 600;">
            <div class="col-sm-2">Fitrio Dermawan
            </div>
            <div class="col-sm-2">Rio
            </div>
            <div class="col-sm-2">5026201061
            </div>
        </div>
        <br>
        <div class="container">
            <h1 style="text-align: center;">Form Input Data Barang</h1>
            <br>
            <br>
            <form action="https://id.pinterest.com/" class="needs-validation" novalidate
                style="font-weight: 600;font-size: 25px;">
                <div class="form-group row justify-content-center bor">
                    <div class="col-sm-3">
                        <label for="namabarang" caclass="col-sm-2 col-form-label">Nama Barang</label>
                    </div>
                    <div class="col-sm-1">:</div>
                    <div class="col-sm-4">
                        <input type="text" name="namabarang" id="namabr" class="form-control" placeholder=""
                            minlength="10" required>
                        <div class="valid-feedback">Sesuai!</div>
                        <div class="invalid-feedback" style="text-align: justify;">Nama barang minimum 10 karakter.
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-3">
                        <label for="harga" caclass="col-sm-2 col-form-label">Harga</label>
                    </div>
                    <div class="col-sm-1">:</div>
                    <div class="col-sm-4">
                        <input type="number" name="hargabarang" id="hargabr" class="form-control" placeholder=""
                         min="5000"   minlength="5" required>
                        <div class="valid-feedback">Sesuai!</div>
                        <div class="invalid-feedback" style="text-align: justify;">Harga minimum 5000.</div>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-3">
                        <label for="jenisbarang" caclass="col-sm-2 col-form-label">Jenis Barang</label>
                    </div>
                    <div class="col-sm-1">:</div>
                    <div class="col-sm-4">
                        <select class="custom-select" name="jenisbarang" id="jenisbr" required>
                            <option selected disabled value=""></option>
                            <option>Makanan</option>
                            <option>Minuman</option>
                            <option>Non Mamin</option>
                        </select>
                        <div class="valid-feedback">Sesuai!</div>
                        <div class="invalid-feedback" style="text-align: justify;">Tolong pilih jenis barang.</div>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-3">
                        <label for="kodebarcode" caclass="col-sm-2 col-form-label">Kode Barcode</label>
                    </div>
                    <div class="col-sm-1">:</div>
                    <div class="col-sm-4">
                        <input type="text" name="kodebarcode" id="kodebrc" class="form-control" placeholder=""
                            minlength="10" required>
                        <div class="valid-feedback">Sesuai!</div>
                        <div class="invalid-feedback" style="text-align: justify;">Kode barcode minimum 10 digit.</div>
                    </div>
                </div>
                <br>
                <div class="container-sm">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm">
                            <button type="submit" class="btn btn-primary btn-block" style="color: white;"
                                id="tombolsubmit">Kirim</button>
                        </div>
                        <div class="col-sm">
                            <input type="reset" class="btn btn-success btn-block" value="Reset" id="tombolreset" style="color: black;">
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
            </form>

        </div>
    </div>

</body>

</html>
