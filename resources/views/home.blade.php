<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TastyFood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('front/assets/style.css') }}">
</head>

<body>
    <div class="background-image">
        <div class="container pt-4">
            <nav class="navbar navbar-expand-lg pe-4">
                <h1><a class="navbar-brand" href="{{ url('/') }}">TASTY FOOD</a></h1>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">TENTANG</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">BERITA</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">GALERI</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">KONTAK</a></li>
                    </ul>
                </div>
            </nav>
            <div class="hero"></div>
            <div class="content">
                <div class="black-line mb-3"></div>
                <h1 class="mb-3">HEALTHY</h1>
                <h1 class="mb-3"><b>TASTY FOOD</b></h1>
                <p>
                    <span class="konten" style="line-height: 2;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                        commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim
                        neque,
                        vel luctus ex. Fusce sit amet <br> viverra ante.
                    </span>
                </p>
                <a href="#" class="btn-black"><b>TENTANG KAMI</b></a>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container mb-3">
            <h3 class="mb-3 text-center"><b>TENTANG KAMI</b>
            </h3>
            <p class="about">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                    commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque,
                    vel luctus ex. Fusce sit amet <br> viverra ante.</span>
            </p>
            <div class="black-line1"></div>
        </div>
    </div>

    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card gallery-card">
                        <img class="card-image" src="{{ asset('assets/ASET/img-1.png') }}" alt=""
                            loading="lazy">
                        <h3 class="card1 mb-3"> <br>
                            <b>LOREM IPSUM</b>
                        </h3>
                        <p class="mb-3 kecil">
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
                        <p class="mb-3 kecil">
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
                        <p class="mb-3 kecil">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                            commodo.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 kecil">
                    <div class="card gallery-card">
                        <img class="card-image" src="{{ asset('assets/ASET/img-4.png') }}" alt="">
                        <h3 class="card1 mb-3"> <br>
                            <b>LOREM IPSUM</b>
                        </h3>
                        <p class="mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                            commodo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BERITA --}}
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
                        <p class="card-text">
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
                                src="{{ asset('assets/ASET/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}"
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
                                src="{{ asset('assets/ASET/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}""width="600" />
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
                                src="{{ asset('assets/ASET/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}"
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
                </div>
            </div>
        </div>
    </div>

    <section class="content-galeri">
        <div class="galeri p-1">
            <div class="galeri-title">
                <h3 class="mb-3 text-center"><b>GALERI KAMI</b>
            </div>
            <div class="row galeri">
                @php $galeries = App\Models\Galery::orderBy('id', 'asc')->get(); @endphp
                @foreach ($galeries as $item)
                    <div class="col-md-3 mb-4">
                        <div class="image-container">
                            <img src="{{ asset('/storage/galeries/' . $item->img) }}"
                                class="rounded img-fluid image-shadow">
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="#" class="galeri-btn">LIHAT LEBIH BANYAK</a>
        </div>
    </section>


    <section class="footer">
        <footer>
            
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
