<section class="header">
    {{-- header --}}
    <div class="overlay"></div>
    <div class="background-image">
        <div class="container pt-4">
            <div class="hero"></div>
            <nav class="navbar navbar-expand-lg pe-5">
                <button class="navbar-toggler" type="button">
                    <span class="toggler-icon">☰</span>
                </button>
                <h1><a class="navbar-brand" href="{{ url('/') }}">DELISH FOOD</a></h1>
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
            <aside>
                <div class="sidebar">
                    <div class="sidebar-header">
                        <span class="sidebar-title">Menu</span>
                        <!-- Gunakan ikon close dari Font Awesome -->
                        <button class="close-btn"><i class="fas fa-times"></i></button>
                    </div>
                    <ul class="sidebar-nav">
                        <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="{{ route('tentang') }}"><i class="fas fa-info-circle"></i> Tentang</a></li>
                        <li><a href="{{ route('berita') }}"><i class="fas fa-newspaper"></i> Berita</a></li>
                        <li><a href="{{ route('galeri') }}"><i class="fas fa-image"></i> Galeri</a></li>
                        <li><a href="{{ route('kontak') }}"><i class="fas fa-envelope"></i> Kontak</a></li>
                    </ul>
                    <div class="sidebar-footer">
                        &copy; 2024 Delish Food. All rights reserved.
                    </div>
                </div>
            </aside>
        </div>
        <div class="content">
            <div class="black-line mb-3"></div>
            <h1 class="mb-3" style="font-weight: 500">HEALTHY</h1>
            <h1 class="mb-3"><strong><b><b>DELISH FOOD</b></b></strong></h1>
            <p>
                <span class="konten" style="line-height: 2;">
                    {{ $judul->deskripsi }}
                </span>
            </p>
            <a href="{{ route('tentang') }}" class="btn-black"><b>TENTANG KAMI</b></a>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbarToggler = document.querySelector(".navbar-toggler");
        const sidebar = document.querySelector(".sidebar");
        const closeBtn = document.querySelector(".close-btn");
        const overlay = document.querySelector(".overlay");

        // Buka sidebar
        navbarToggler.addEventListener("click", function() {
            sidebar.classList.add("active");
            overlay.classList.add("active"); // Tampilkan overlay
        });

        // Tutup sidebar dengan tombol close
        closeBtn.addEventListener("click", function() {
            sidebar.classList.remove("active");
            overlay.classList.remove("active"); // Sembunyikan overlay
        });

        // Tutup sidebar dengan klik overlay
        overlay.addEventListener("click", function() {
            sidebar.classList.remove("active");
            overlay.classList.remove("active");
        });
    });
</script>
