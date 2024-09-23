<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TastyFood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
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
                <h1 class="mb-3" style="font-family: 'Poppins', sans-serif;">HEALTHY</h1>
                <h1 class="mb-3" style="font-family: Arial, sans-serif; font-weight: bold;"><b>TASTY FOOD</b></h1>
                <p>
                    <span style="line-height: 2;">
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
            <h3 class="mb-3 text-center" style="font-family: Arial, sans-serif; font-weight: bold"><b>TENTANG KAMI</b>
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
                    <div class="card">
                        <img class="card-image" src="{{ asset('assets/ASET/img-1.png') }}" alt="">
                        <h3 class="card1 mb-3" style="font-family: Arial, sans-serif;"> <br>
                            <b>LOREM IPSUM</b>
                        </h3>
                        <p class="mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-image" src="{{ asset('assets/ASET/img-2.png') }}" alt="">
                        <h3 class="card1 mb-3" style="font-family: Arial, sans-serif;"><br>
                            <b>LOREM IPSUM</b>
                        </h3>
                        <p class="mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-image" src="{{ asset('assets/ASET/img-3.png') }}" alt="">
                        <h3 class="card1 mb-3" style="font-family: Arial, sans-serif;"><br>
                            <b>LOREM IPSUM</b>
                        </h3>
                        <p class="mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-image" src="{{ asset('assets/ASET/img-4.png') }}" alt="">
                        <h3 class="card1 mb-3" style="font-family: Arial, sans-serif;"><br>
                            <b>LOREM IPSUM</b>
                        </h3>
                        <p class="mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="news-title">
            BERITA KAMI
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card berita">
                    <img alt="A delicious meal with various dishes on a table" class="card-img-top"
                        src="{{asset('assets/ASET/fathul-abrar-T-qI_MI2EMA-unsplash.jpg')}}" style="width: 100%; height: auto;"/>
                    <div class="card-body">
                        <h5 class="card-title">
                            LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT
                        </h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet
                            cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat
                            tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris
                            eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat.
                        </p>
                        <a class="read-more" href="#">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card berita">
                            <img alt="Fresh vegetables on a table" class="card-img-top" height="200"
                                src="{{asset('assets/ASET/sanket-shah-SVA7TyHxojY-unsplash.jpg')}}"
                                width="600" />
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    commodo, nisl ut varius ultricies, sapien elit euismod mi, eu sodales erat nisi
                                    euismod velit.</p>
                                <a class="read-more" href="#">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card berita">
                            <img alt="Delicious dessert on a table" class="card-img-top" height="200"
                                src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-RcpoXHkzChYnDbFAyeQ8tamr/user-ehrvabJ3DufsCu8YJ7PqY5gl/img-UzEiUzlChbpNnyLDsDrPb4wp.png?st=2024-09-21T05%3A53%3A28Z&amp;se=2024-09-21T07%3A53%3A28Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-20T23%3A34%3A39Z&amp;ske=2024-09-21T23%3A34%3A39Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=sIehiTLfjG8XwLpJGb/55ALNHMVfI/TFKgWB9agc/60%3D"
                                width="600" />
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    commodo, nisl ut varius ultricies, sapien elit euismod mi, eu sodales erat nisi
                                    euismod velit.</p>
                                <a class="read-more" href="#">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card berita">
                            <img alt="Delicious dessert on a table" class="card-img-top" height="200"
                                src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-RcpoXHkzChYnDbFAyeQ8tamr/user-ehrvabJ3DufsCu8YJ7PqY5gl/img-UzEiUzlChbpNnyLDsDrPb4wp.png?st=2024-09-21T05%3A53%3A28Z&amp;se=2024-09-21T07%3A53%3A28Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-20T23%3A34%3A39Z&amp;ske=2024-09-21T23%3A34%3A39Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=sIehiTLfjG8XwLpJGb/55ALNHMVfI/TFKgWB9agc/60%3D"
                                width="600" />
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    commodo, nisl ut varius ultricies, sapien elit euismod mi, eu sodales erat nisi
                                    euismod velit.</p>
                                <a class="read-more" href="#">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card berita">
                            <img alt="Delicious dessert on a table" class="card-img-top" height="200"
                                src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-RcpoXHkzChYnDbFAyeQ8tamr/user-ehrvabJ3DufsCu8YJ7PqY5gl/img-UzEiUzlChbpNnyLDsDrPb4wp.png?st=2024-09-21T05%3A53%3A28Z&amp;se=2024-09-21T07%3A53%3A28Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-20T23%3A34%3A39Z&amp;ske=2024-09-21T23%3A34%3A39Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=sIehiTLfjG8XwLpJGb/55ALNHMVfI/TFKgWB9agc/60%3D"
                                width="600" />
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    commodo, nisl ut varius ultricies, sapien elit euismod mi, eu sodales erat nisi
                                    euismod velit.</p>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybJ5HbHj4nM2puwK3Z+SkS7YxB/e+bdHjYUV7u+x2npL/W51H"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-lZ29kjw1M1j8zRAY2UJYKo/8f9TcF/R1ZmMi8t9FBOH9BoF7XymFq5Vj7FFkN5D9"
        crossorigin="anonymous"></script>
</body>

</html>
