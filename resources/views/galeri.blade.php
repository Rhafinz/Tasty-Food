@extends('layouts.user')

@section('content')
    <div class="content">
        <h2><b>GALERI KAMI</b></h2>
    </div>

    @php
        $galeries = App\Models\Galery::orderBy('id', 'asc')->get();
        $sliders = App\Models\Slider::get();
    @endphp

    <!-- Carousel -->
    <section class="slider">
        <div id="foodCarousel" class="carousel slide content-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                @forelse ($sliders as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset('/storage/sliders/' . $item->slider) }}" class="d-block img-fluid" alt="Food">
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning text-center" role="alert">
                            Data slider belum tersedia.
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="carousel-controls">
                <button class="carousel-control-prev" type="button" data-bs-target="#foodCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#foodCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <section class="photo">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($galeries as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="square img-hover text-center">
                            <img src="{{ asset('/storage/galeries/' . $item->img) }}" class="img-fluid rounded-img"
                                alt="Gallery Image" loading="lazy">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
