@extends('layout.eatwell')
@section('title', '- Home')

@section('content')
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row  mt-5">
                <div class="col-sm-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Cara mudah untuk <span>kontrol</span> pola hidupmu</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui
                        semper
                        at orci in pellentesque viverra lectus turpis.</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Mulai</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 hero-img" data-aos="fade-in" data-aos-delay="200">
                    <img src="{{ asset('assets/eatimg/dashboard-illustration.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>

    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="col-sm d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="title">
                    <h2> Apa yang bisa kami lakukan </h3>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-sm d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <img src="{{ asset('assets/eatimg/akl_1.png') }}" class="img-fluid" alt="">
                        <p>
                            Mengingatkanmu mengenai jadwal dietmu
                        </p>
                    </div>
                </div>
                <div class="col-sm d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <img src="{{ asset('assets/eatimg/akl_2.png') }}" class="img-fluid" alt="">
                        <p>
                            Memberikan informasi akibat menyusun diet yang salah
                        </p>
                    </div>
                </div>
                <div class="col-sm d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content" id="sehat">
                        <img src="{{ asset('assets/eatimg/akl_3.png') }}" class="img-fluid" alt="">
                        <p>
                            Meningkatkan ketertarikan untuk menyusun diet sehat
                        </p>
                    </div>
                </div>
                <div class="col-sm d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <img src="{{ asset('assets/eatimg/akl_4.png') }}" class="img-fluid" alt="">
                        <p>
                            Mengingatkan untuk tetap diet
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
