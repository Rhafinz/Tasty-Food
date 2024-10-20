@extends('layouts.user')
@section('content')
    <div class="content">
        <h2><b>GALERI KAMI</b></h2>
    </div>
    @php $galeries = App\Models\Galery::orderBy('id', 'asc')->get(); @endphp
    <!-- Carousel -->
    <section class="slider">
        <div id="foodCarousel" class="carousel slide content-gallery" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($galeries->take(6) as $key => $item)
                    @if ($item->slider)
                        <!-- Pastikan slider tidak kosong -->
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <!-- memastikan hanya satu item yang ditampilkan sebagai aktif saat carousel dimulai -->
                            <img src="{{ asset('storage/galeries/slider/' . $item->slider) }}" class="d-block img-fluid"
                                alt="Food {{ $key + 1 }}">
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- Previous Button with Font Awesome Icon -->
            <button class="carousel-control-prev" type="button" data-bs-target="#foodCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <!-- Next Button with Font Awesome Icon -->
            <button class="carousel-control-next" type="button" data-bs-target="#foodCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon">
                    <i class="fas fa-chevron-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="photo">
        <div class="container container-img">
            <div class="row">
                @foreach ($galeries as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <img src="{{ asset('/storage/galeries/img/' . $item->img) }}" class="rounded-img" alt="Food"
                            loading="lazy">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
