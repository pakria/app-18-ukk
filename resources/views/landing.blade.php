@extends('partials.app')
@section('konten')
    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container" style="">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>GBook<strong> Sigudang Ilmu</strong></h1>
                        <p>Mari membaca buku karena membaca buku adalah gudang ilmu</p>
                        <a href="{{ route('login') }}" class="main-button-slider">Login</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="{{asset ('dist/assets/images/right-image.png')}}" class="rounded img-fluid d-block mx-auto"
                            alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{asset ('dist/assets/images/left-image.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>Tentang Kami</h5>
                    </div>
                    <div class="left-text">
                        <p>GBook merupakan sebuah web yang berfungsi untuk membantu para pelajar dalam meminjam buku.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
     <section class="section" id="services">
        <div class="container">
            <div class="row">
                @foreach ($buku as $item)    
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="card" style="height: 100%;">
                                <i><img src="{{ asset('storage/buku/' . $item->cover) }}" alt="buku"></i>
                            </div>
                            <h5 class="service-title">{{ $item->judul }}</h5>
                            <p>{{ $item->deskripsi }}</p>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
