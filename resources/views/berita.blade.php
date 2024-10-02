@extends('layouts.user')
@section('content')
    <h2 class="thick"><b>BERITA KAMI</b></h2>
    <!-- Hero Section -->
    <section class="container my-5 news-nusantara">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="food.jpg" alt="Makanan Khas Nusantara" class="img-fluid rounded hero-image">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 mb-4">Apa Saja Makanan Khas Nusantara?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, sapien id ultricies gravida.
                </p>
                <a href="#" class="btn btn-dark">Baca Selengkapnya</a>
            </div>
        </div>
    </section>

    <!-- Berita Section -->
    <section class="container news-other">
        <h2 class="text-center mb-4">Berita Lainnya</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="news1.jpg" class="card-img-top" alt="News 1">
                    <div class="card-body">
                        <h5 class="card-title">Lorem Ipsum</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-warning">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Repeat .col-md-6 .col-lg-4 blocks for more news -->
        </div>
    </section>
@endsection
