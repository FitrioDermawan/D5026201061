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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link rel="icon" href="https://i.ibb.co/sjwVT6p/Artboard-1-300x.png" sizes="16x16">
    <title>Hasil Periksa Mandiri | Risiko Covid-19</title>
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 50px;
            font-family: 'Montserrat', sans-serif;
            background-color: #ffffff;
        }
        .border-3 {
            border-color: #5aa7a7 !important;
            border-width: 2px !important;
            background-color: white;
        }

    </style>
</head>

<body>
    <?php
       $name = $_POST["name"];
       $nip = $_POST["nip"];
       $sex = $_POST["optsex"];
       $q1 = $_POST["optq1"];
       $q2 = $_POST["optq2"];
       $q3 = $_POST["optq3"];
       $q4 = $_POST["optq4"];
       $q5 = $_POST["optq5"];
       $q6 = $_POST["optq6"];
       $ansList = array();
       array_push($ansList, $q1, $q2, $q3, $q4, $q5, $q6);
       function question($var) {
           return($var & "1");
        }
        $score = count(array_filter($ansList, "question"));
        $panggilan = "";
        $risk = "";
        if ($sex=="m") {
            $panggilan = "Saudara ";
        }
        else {
            $panggilan = "Saudari ";
        }
        if ($score >= 5) {
            $risk = "Risiko Tinggi";
        }
        else if ($score == 1) {
            if ($ansList[4] == "1" || $ansList[5] == "1") {
                $risk = "Risiko Tinggi";
            } 
            else {
                $risk = "Risiko Sedang";
            }
        } else {
            $risk = "Risiko Rendah";
        }
    ?>
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
        <div class="row">
            <div class="col-sm">
            <h4>Hasil kalkukasi risiko <b> <?php echo $panggilan . $name ?> </b> adalah :</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <h3 style="font-weight: bold; bold; color:#5aa7a7 ;" ><?php echo $risk ?></h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <h7><b>Tindak Lanjut:</b></h7>
                <p><b>Risiko Rendah dan Sedang,</b> diperbolehkan masuk kerja, namun dilakukan pemeriksaan
                    suhu di pintu masuk tempat kerja. Apabila suhu tubuh terukur >37,3C perlu dilakukan
                    investigasi dan pemeriksaan oleh petugas kesehatan. Jika dipastikan pekerja tidak
                    memenuhi kriteria OTG,ODP atau PDP. Pekerja dapatmasuk bekerja</p>
                <p><b>Risiko Tinggi,</b> dilakukan investigasi dan tidak diperkenankan masuk bekerja. Pekerja
                    dilakukan pemeriksaan RT-PCR, jika tidak tersedia dapat dilakukan Rapid Test oleh
                    petugas kesehatan setempat</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                Untuk informasi tes terdekat klik
                <a
                    href="https://www.halodoc.com/cari-dokter/bekasi/spesialis/pcr-test?gclid=CjwKCAjw7--KBhAMEiwAxfpkWAGwiXdyPKbRtysWFQrUB2-Z5MhAsgMAGGQghFhGX37DYPZAosZ8PRoCTGgQAvD_BwE">disini</a>
            </div>
        </div>
    </div>
</body>

</html>