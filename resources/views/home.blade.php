@extends('layouts.home')
@section('content')
    <section class="about">
        <div class="about-content">
            <div class="container mb-3">
                <h3 class="mb-3 text-center"><b>TENTANG KAMI</b>
                </h3>
                <p class="about-p">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                        commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque,
                        vel luctus ex. Fusce sit amet <br> viverra ante.</span>
                </p>
                <div class="black-line1"></div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="gallery-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card gallery-card">
                            <img class="card-image" src="{{ asset('assets/ASET/img-1.png') }}" alt=""
                                loading="lazy">
                            <h3 class="card1 mb-3"> <br>
                                <b>LOREM IPSUM</b>
                            </h3>
                            <p class="mb-3 font-tiny">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                                commodo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card gallery-card">
                            <img class="card-image" src="{{ asset('assets/ASET/img-2.png') }}" alt="">
                            <h3 class="card1 mb-3"> <br>
                                <b>LOREM IPSUM</b>
                            </h3>
                            <p class="mb-3 font-tiny">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                                commodo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card gallery-card">
                            <img class="card-image" src="{{ asset('assets/ASET/img-3.png') }}" alt="">
                            <h3 class="card1 mb-3"> <br>
                                <b>LOREM IPSUM</b>
                            </h3>
                            <p class="mb-3 font-tiny">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                                commodo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card gallery-card">
                            <img class="card-image" src="{{ asset('assets/ASET/img-4.png') }}" alt="">
                            <h3 class="card1 mb-3"> <br>
                                <b>LOREM IPSUM</b>
                            </h3>
                            <p class="mb-3 font-tiny">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                                commodo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BERITA --}}
    <section class="news">
    <div class="container">
        <div class="news-title">
            <h3 class="mb-3 text-center"><b>BERITA KAMI</b>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card berita-card card-panjang">
                    <img alt="A delicious meal with various dishes on a table" class="card-img-top"
                        src="{{ asset('assets/ASET/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}"
                        style="width: 100%; height: auto;" />
                    <div class="card-body bodis">
                        <h5 class="card-title">
                            LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT
                        </h5>
                        <p class="card-text top">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet
                            cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat
                            tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris
                            eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat.
                        </p>
                        <a class="read-besar" href="#">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card berita-card kecil-card">
                            <img alt="Fresh vegetables on a table" class="card-img-top" height="200"
                                src="{{ asset('assets/ASET/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" width="600" />
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    commodo,</p>
                                <a class="read-more" href="#">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card berita-card kecil-card">
                            <img alt="Delicious dessert on a table" class="card-img-top" height="200"
                                src="{{ asset('assets/ASET/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}"
                                width="600" />
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    commodo,</p>
                                <a class="read-more" href="#">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card berita-card kecil-card">
                            <img alt="Delicious dessert on a table" class="card-img-top" height="200"
                                src="{{ asset('assets/ASET/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" width="600" />
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    commodo,</p>
                                <a class="read-more" href="#">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card berita-card kecil-card">
                            <img alt="Delicious dessert on a table" class="card-img-top" height="200"
                                src="{{ asset('assets/ASET/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}" width="600" />
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    commodo,</p>
                                <a class="read-more" href="#">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="content-galeri">
        <div class="galeri p-1">
            <div class="galeri-title">
                <h3 class="mb-3 text-center"><b>GALERI KAMI</b>
            </div>
            <div class="row galeri">
                @php $galeries = App\Models\Galery::orderBy('id', 'asc')->take(6)->get(); @endphp
                @foreach ($galeries as $item)
                    <div class="col-md-3 mb-4">
                        <div class="image-container">
                            <img src="{{ asset('/storage/galeries/' . $item->img) }}"
                                class="rounded img-fluid image-shadow">
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('galeri') }}" class="galeri-btn">LIHAT LEBIH BANYAK</a>
        </div>
    </section>
@endsection
