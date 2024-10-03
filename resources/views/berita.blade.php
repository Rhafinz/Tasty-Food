@extends('layouts.user')
@section('content')
    <h2 class="thick"><b>BERITA KAMI</b></h2>
    <!-- Hero Section -->
    <section class="news-content">
        <div class="container news-nusantara">
            <div class="row row-news">
                <!-- Bagian Gambar Misi -->
                <div class="col-md-6">
                    <img src="{{ asset('assets/ASET/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" alt="News Image"
                        class="img-fluid rounded-image-news">
                </div>
                <!-- Bagian Teks Misi -->
                <div class="col-md-6 text-content-news">
                    <h3 class="mb-4"><b>APA SAJA MAKANAN KHAS NUSANTARA?</b></h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                        rutrum commodo,
                        dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                        luctus ex. Fusce sit amet viverra ante.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                        rutrum commodo,
                        dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                        luctus ex. Fusce sit amet viverra ante.</p>

                    <a href="#" class="btn-black"><b>BACA SELENGKAPNYA</b></a>
                </div>
            </div>
        </div>
    </section>
    <section class="news-other">
        <div class="container">
            <h3 class="news-other"><b>BERITA LAINNYA</b></h3>
            <div class="row g-5">
                @php
                    $beritas = App\Models\Berita::orderBy('id', 'asc')->get();
                @endphp

                @foreach ($beritas as $item)
                    <div class="col-md-3"> <!-- 4 kolom per baris -->
                        <div class="card berita-card distance-card">
                            <img alt="Fresh vegetables on a table" class="card-img-top" height="200"
                                src="{{ asset('/storage/beritas/' . $item->image) }}" width="600" />
                            <div class="card-body d-flex">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->deskripsi }}</p>
                                <a class="read-more" href="#">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
