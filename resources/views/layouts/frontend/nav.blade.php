<div class="background-image">
    <div class="container pt-4">
        <nav class="navbar navbar-expand-lg pe-4">
            <h1><a class="navbar-brand" href="{{ url('/') }}">TASTY FOOD</a></h1>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tentang') }}">TENTANG</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('berita') }}">BERITA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('galeri') }}">GALERI</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">KONTAK</a></li>
                </ul>
            </div>
        </nav>
        <div class="hero"></div>
        <div class="content">
            <div class="black-line mb-3"></div>
            <h1 class="mb-3">HEALTHY</h1>
            <h1 class="mb-3"><strong><b><b>TASTY FOOD</b></b></strong></h1>
            <p>
                <span class="konten" style="line-height: 2;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                    commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim
                    neque,
                    vel luctus ex. Fusce sit amet <br> viverra ante.
                </span>
            </p>
            <a href="{{ route('tentang') }}" class="btn-black"><b>TENTANG KAMI</b></a>
        </div>
    </div>
</div>
