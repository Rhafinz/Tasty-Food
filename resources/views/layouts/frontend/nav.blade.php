<section class="header">
    {{-- Header --}}
    <div class="background-image">
        <div class="container pt-4">
            <div class="hero"></div>
            <nav class="navbar navbar-expand-lg pe-5">
                <h1><a class="navbar-brand" href="{{ url('/') }}">TASTY FOOD</a></h1>
                <button class="navbar-toggler" type="button" id="menuToggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tentang') }}">TENTANG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('berita') }}">BERITA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('galeri') }}">GALERI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kontak') }}">KONTAK</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content">
            <div class="black-line mb-3"></div>
            <h1 class="mb-3" style="font-weight: 500">HEALTHY</h1>
            <h1 class="mb-3"><strong><b><b>TASTY FOOD</b></b></strong></h1>
            <p>
                <span class="konten" style="line-height: 2;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                    commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim
                    neque,
                    vel luctus ex. Fusce sit amet viverra ante.
                </span>
            </p>
            <a href="{{ route('tentang') }}" class="btn-black"><b>TENTANG KAMI</b></a>
        </div>
    </div>
</section>
