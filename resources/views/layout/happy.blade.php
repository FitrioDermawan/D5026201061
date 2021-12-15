<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            width: 80%;
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

        #navmenu {
            background-color: #ffffff;
            min-height: calc(100vh - 100px);
        }

        footer {
            color: #009879;
            padding-top: 10px;
            padding-bottom: 20px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
        }

        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        li a.active {
            background-color: #dddddd;
            color: black;
        }

        li a:hover:not(.active) {
            background-color: #dddddd;
            color: black;
        }

        #nav {
            background-color: #009879;
            color: #ffffff;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center
        }

        header {
            padding-top: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #009879;
        }

        #ubah {
            background-color: #f3f3f3;
            padding-top: 40px;
            padding-bottom: 40px;
            margin: 0;

        }

        .btn-green {
            background-color: #009879;
            border-color: #009879;
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
            color: #009879;
            border-color: #009879;
        }

        .border-3 {
            border-color: #009879 !important;
            border-width: 2px !important;
            background-color: white;
            border-radius: 2;

        }

    </style>
</head>

<body>
    <header>
        <div class="container-fluid" id="header">
            <div class="row">
                <div class="col-sm-1">
                    <img src="https://i.ibb.co/y0x0ZQG/Twibbon-ITS-2-1.jpg" id="foto" class="img-responsive">
                </div>
                <div class="col-sm-11">
                    <h3 id="nrp">506202061</h3>
                    <h3 id="nama">Fitrio Dermawan</h3>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2" id="navmenu">
                <h4 id="nav"><b>Navigation</b></h4>
                <ul>
                    <li><a href="/pegawai"><i class="fas fa-user"></i> Pegawai</a></li>
                    <li><a href="/absen"><i class="fas fa-calendar-week"></i> Absen</a></li>
                    <li><a href="/pendapatan"><i class="fas fa-tasks"></i> Pendapatan</a></li>
                    <li><a href="/ikan">Praktikum</a></li>
                    <li><a href="/nilai">UAS</a></li>
                </ul>
            </div>
            <div class="col-sm-10">
                <h3>
                    @yield('judulhalaman')
                </h3>
                @section('konten')
                @show
            </div>
        </div>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">Hak Cipta 5026201061 - Fitrio Dermawan</div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </footer>
</body>

</html>
