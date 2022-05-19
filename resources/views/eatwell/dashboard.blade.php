@extends('layout.dash')
@section('title', '- Dashboard')

@section('dashboard')
    nav-link
@endsection

@section('home')
    nav-link collapsed
@endsection

@section('kalkulasi')
    nav-link collapsed
@endsection

@section('profil')
    nav-link collapsed
@endsection

@section('pengaturan')
    nav-link collapsed
@endsection

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h2>Halo, Muhammad Irfan</h2>
        </div>


        <div class="col-lg-8">
            <div class="row">
                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h6 class="card-title">Tinggi</h6>
                            <h3 class="card-content">165 cm</h3>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h6 class="card-title">Tinggi</h6>
                            <h3 class="card-content">165 cm</h3>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h6 class="card-title">Tinggi</h6>
                            <h3 class="card-content">165 cm</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
